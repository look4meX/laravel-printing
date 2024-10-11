<?php

declare(strict_types=1);

namespace Rawilk\Printing\Api\PrintNode\Entity;

use Carbon\Carbon;

class Scale extends Entity {
    public string|int $computerId;

    public ?string $deviceName = null;

    public ?array $measurement = [];

    public ?float $massKg = null;

    public ?int $ageOfData = null;

    public ?Carbon $created = null;

    public function setMass(array $data): self {
        $this->massKg = $data[0] / 1000000000;

        return $this;
    }

    public function toArray(): array {
        return array_merge(parent::toArray(), [
            'createTimestamp' => $this->created,
        ]);
    }
}
