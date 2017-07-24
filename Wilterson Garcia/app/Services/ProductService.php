<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 24/07/2017
 * Time: 02:12
 */

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryEloquent;
use App\Validators\ProductValidator;
use Illuminate\Support\Facades\URL;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ProductService
{
    /**
     * @var ProductRepository
     */
    private $repository;
    /**
     * @var ProductValidator
     */
    private $validator;

    /**
     * ProductService constructor.
     * @param ProductRepository $repository
     * @param ProductValidator $validator
     */
    public function __construct(ProductRepositoryEloquent $repository, ProductValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function all()
    {
        return $this->repository->skipPresenter(false)->all()['data'];

    }

    public function create(array $data)
    {
        try{

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

            $this->repository->create($data);

            return response()->json([
                'success' => true,
                'message'    => 'Cadastrado com sucesso',
            ], 200);

        } catch (ValidatorException $e){
            $key = array_keys($e->getMessageBag()->messages());

            return response()->json([
                'success' => false,
                'message' => $e->getMessageBag()->messages()[$key[0]][0]
            ], 200);
        }
    }

    public function upload($image)
    {

        $dir = 'images/products/' . md5(microtime()) . "." . 'jpg';
        $document_name = public_path($dir);

        $base64img = str_replace('data:image/jpeg;base64,', '', $image['base64']);
        $img = base64_decode($base64img);

        file_put_contents($document_name,  $img);
        return URL::to($dir);
    }


}
