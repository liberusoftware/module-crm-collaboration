<?php

declare(strict_types=1);

namespace Liberu\CRM\Collaboration\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property string $queue_key
 * @property string $subject_key
 * @property string|null $assignee_key
 * @property string $status
 */
final class CollaborationWork extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_collaboration_work';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['metadata' => 'array'];
    }
}
