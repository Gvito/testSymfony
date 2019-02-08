<?php
namespace App\Service;
use App\Entity\Article;
/**
 *
 */
class SwearCleaner
{
  const SWEARS = ["merde", "connard", "abruti", "putain", "bordel"];
  const REPLACEMENT = "########";
  public function cleanSwear(Article $article): Article {
    $article->setContentofarticle(str_replace(self::SWEARS, self::REPLACEMENT, $article->getContentofarticle()));
    return $article;
  }
}
