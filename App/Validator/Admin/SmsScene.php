<?php
/**
 *
 * Copyright  FaShop
 * License    http://www.fashop.cn
 * link       http://www.fashop.cn
 * Created by FaShop.
 * User: hanwenbo
 * Date: 2018/2/8
 * Time: 下午4:13
 *
 */

namespace App\Validator\Admin;


use ezswoole\Validator;

class SmsScene extends Validator
{
	protected $rule
		= [
			'name'                 => 'require',
			'sign'                 => 'require',
			'signature'            => 'require',
			'provider_template_id' => 'require',
			'provider_type'        => 'require',
			'body'                 => 'require',
		];
	protected $message
		= [];
	protected $scene
		= [
			'edit'   => [
				'name',
				'sign',
				'provider_type',
				'body',
				'provider_template_id',
				'signature'
			],
			'info'   => [
				'id',
			],
		];


}