<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['title', 'content', 'created_at', 'updated_at'];

    /**
     * Ambil satu post berdasarkan ID
     */
    public function getPost($id)
    {
        return $this->find($id);
    }

    /**
     * Ambil semua posts
     */
    public function getAllPosts()
    {
        return $this->findAll();
    }

    /**
     * Data dummy untuk demo (sebelum ada database)
     */
    public function getDummyPost($id): ?array
    {
        $posts = [
            1 => ['id' => 1, 'title' => 'Belajar CodeIgniter', 'content' => 'Tutorial CI4 - Framework PHP yang powerful'],
            2 => ['id' => 2, 'title' => 'Belajar PHP', 'content' => 'Tutorial PHP - Bahasa pemrograman web'],
            3 => ['id' => 3, 'title' => 'Belajar Database', 'content' => 'Tutorial MySQL - Database relasional'],
        ];

        return $posts[$id] ?? null;
    }
}
