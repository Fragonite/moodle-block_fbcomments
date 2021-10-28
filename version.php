<?php
// This file is part of Fbcomments - https://github.com/ankitagarwal/moodle-block_fbcomments
//
// Fbcomments is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Fbcomments is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version files for fbcomments block instances.
 *
 * @package   block_fbcomments
 * @copyright 2013 onwards Ankit Agarwal <ankit.agrr@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2021102800;
$plugin->requires  = 2021051700; // Supports 3.11 and above.
$plugin->component = 'block_fbcomments';      // Full name of the plugin (used for diagnostics).
$plugin->release   = '3.1';
$plugin->maturity  = MATURITY_STABLE;
