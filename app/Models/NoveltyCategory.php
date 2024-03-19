<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class NoveltyCategory extends Model
    {
        use HasFactory;

        protected $table = 'novelty_categories';

        public function novelties()
        {
            return $this->hasMany(Novelty::class);
        }
    }
