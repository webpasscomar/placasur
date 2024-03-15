<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Novelty extends Model
    {
        use HasFactory;

        protected $table = 'novelties';
        protected $fillable = [
            'image',
            'title',
            'description',
            'order',
            'category_id',
            'status'
        ];

        public function category()
        {
            return $this->belongsTo(NoveltyCategory::class);
        }
    }
