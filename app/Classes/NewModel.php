<?php

namespace App\Classes;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model {

    public static function allWithRelation($relations = array())
    {
        $instance = new static();
        $rows = $instance->newQuery()->get();

        if (!empty($relations))
        {
            foreach ($rows as $row)
            {
                reset($relations);
                foreach ($relations as $key => $value)
                {
                    if ($value === TRUE)
                    {
                        $row->$key->toArray();
                    }
                }
            }
        }
        return $rows;
    }

    public static function findWithRelation($id, $columns = array('*'), $relations = array())
    {
        $instance = new static();
        if (is_array($id) && empty($id))
        {
            return $instance->newCollection();
        }

        if (empty($columns))
        {
            $columns = array('*');
        }

        $row = $instance->newQuery()->find($id, $columns);

        if (!empty($relations))
        {
            foreach ($relations as $key => $value)
            {
                if ($value === TRUE)
                {
                    $row->$key->toArray();
                }
            }
        }
        return $row;
    }

}
