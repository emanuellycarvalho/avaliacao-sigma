<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    protected static $model;

    /** 
     * função para carregar a model, utilizada
     * pois estou utulizando métodos estáticos
     * num modelo de hierarquia para abstrair
     * e reaproveitar código
     * @return Model
    */
    public static function resolveModel():Model{
        return app(static::$model);
    }

    public static function all():Collection{
        return self::resolveModel()::all();
    }

    public static function find(int $id):Model|null{
        return self::resolveModel()::query()->find($id);
    }

    public static function create(array $data = []):Model|null{
        return self::resolveModel()::query()->create($data);
    }
    
    public static function delete(int $id):int{
        return self::resolveModel()::query()->where(['id' => $id])->delete();
    }

    public static function update(int $id, array $data = []):int{
        return self::resolveModel()::query()->where(['id' => $id])->update($data);
    }

}