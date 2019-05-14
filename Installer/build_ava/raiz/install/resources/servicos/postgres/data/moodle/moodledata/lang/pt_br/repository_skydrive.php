<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_skydrive', language 'pt_br', branch 'MOODLE_35_STABLE'
 *
 * @package   repository_skydrive
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_foldername'] = 'Nome do diretório de cache';
$string['clientid'] = 'ID do cliente';
$string['configplugin'] = 'Configurar Microsoft OneDrive (legado)';
$string['deprecatedwarning'] = 'Aviso: A API utilizada por este plugin de repositório foi desativada pela Microsoft e ele irá parar de funcionar eventualmente. Migre para o repositório mais recente "Microsoft OneDrive".';
$string['oauthinfo'] = '<p>Para utilizar este plugin, você deve registrar seu site <a href="https://account.live.com/developers/applications">com a Microsoft</a>.</p>
<p>Como parte do processo de registro, você vai precisar informar a seguinte URL como "Domínio de redirecionamento":</p>
<p>{$a->callbackurl}</p>
<p>Uma vez registrado, será fornecido a você um ID de cliente e um "segredo" que deve ser informado aqui.</p>';
$string['pluginname'] = 'Microsoft OneDrive (legado)';
$string['secret'] = 'Segredo';
$string['skydrive:view'] = 'Ver OneDrive (legado)';
