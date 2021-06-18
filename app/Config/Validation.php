<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $transaction = [
		'filedpt'         => 'uploaded[trx_file]|ext_in[trx_file,xls,xlsx]|max_size[trx_file,2048]',
	];
	 
	public $transaction_errors = [
		'filedpt'=> [
			'ext_in'    => 'File Excel hanya boleh diisi dengan xls atau xlsx.',
			'max_size'  => 'File Excel product maksimal 1mb',
			'uploaded'  => 'File Excel product wajib diisi'
		]
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
