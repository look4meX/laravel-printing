<?php

declare(strict_types=1);

namespace Rawilk\Printing\Api\PrintNode\Requests;

use Rawilk\Printing\Api\PrintNode\Entity\Computer;
use Rawilk\Printing\Api\PrintNode\Entity\Scale;

class ScaleRequest extends PrintNodeRequest {
    public function response(int $computerId): ?Scale {
        $scales = $this->getRequest("computer/{$computerId}/scales");

        if (count($scales) === 0) {
            return null;
        }

        return new Scale($scales[0]);
    }
}
