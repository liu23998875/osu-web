<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Models;

use PDOException;

trait Reportable
{
    abstract protected function newReportableExtraParams() : array;

    public function reportedIn()
    {
        return $this->morphMany(UserReport::class, 'reportable');
    }

    /**
     * Creates and saves a new UserReport.
     *
     * @param User $reporter
     * @param array $params
     * @return UserReport|null The instance of UserReport saved, null if it is a duplicate.
     */
    public function reportBy(User $reporter, array $params = []) : ?UserReport
    {
        try {
            return $this->reportedIn()->create(
                array_merge([
                    'comments' => $params['comments'] ?? '',
                    'reason' => $params['reason'] ?? 'Cheating',
                    'reporter_id' => $reporter->getKey(),
                ], $this->newReportableExtraParams())
            );
        } catch (PDOException $e) {
            // ignore duplicate reports
            if (!is_sql_unique_exception($e)) {
                throw $e;
            }

            return null;
        }
    }
}
