<?php

declare(strict_types=1);

/*
 * This file is part of the doctrine-orm-refetch package.
 *
 * (c) E-commit <contact@e-commit.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecommit\DoctrineOrmRefetch\Tests\App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'sale')]
class Sale
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Book::class, inversedBy: 'sales')]
    #[ORM\JoinColumn(name: 'book_id', referencedColumnName: 'book_id', nullable: false)]
    protected $book;

    #[ORM\Id]
    #[ORM\Column(type: 'smallint')]
    protected $year;

    #[ORM\Column(type: 'integer')]
    protected $countSales;

    public function setBook(?Book $book = null): self
    {
        $this->book = $book;

        return $this;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getCountSales(): int
    {
        return $this->countSales;
    }

    public function setCountSales(int $countSales): self
    {
        $this->countSales = $countSales;

        return $this;
    }
}
