<?php
/**
 * Copyright (c) 2013 Bart Visscher <bartv@thisnet.nl>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */


namespace OC\DB;

class AdapterPgSql extends Adapter {
	public function lastInsertId($table) {
		return $this->conn->fetchColumn('SELECT lastval()');
	}
}
