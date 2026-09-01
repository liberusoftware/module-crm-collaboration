<?php

declare(strict_types=1);

namespace Liberu\CRM\Collaboration\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $record_key @property string $kind @property string $status @property array<int,mixed>|null $mentions */
final class CollaborationRecord extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_collaboration_records';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['mentions' => 'array'];
    }
}
