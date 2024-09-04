<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class DBLibrary extends Model
{
    // Define common fields
    protected $fillable = ['description'];

    // Common methods can be defined here
    public static function createEntry($description)
    {
        return self::create(['description' => $description]);
    }

    public static function deleteEntry($id)
    {
        $entry = self::find($id);
        if ($entry) {
            $entry->delete();
            return true;
        }
        return false;
    }

    public static function findOne($id)
    {
        return self::where('id', $id)->first();
    }

    public static function findMany()
    {
        return self::paginate(10);
    }

    public static function updateEntry($id, $description)
    {
        $entry = self::find($id);
        $entry->description = $description;
        $entry->save();
        return $entry;
    }
}
