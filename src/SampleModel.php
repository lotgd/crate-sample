<?php
declare(strict_types=1);

namespace LotGD\Crates\Sample;

use LotGD\Core\Models\SaveableInterface;
use LotGD\Core\Tools\Model\Saveable;

/**
 * An entity just to store some sample data in each row.
 * @Entity
 * @Table(name="sample_models")
 */
class SampleModel implements SaveableInterface
{
    use Saveable;

    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Column(type="string") */
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
