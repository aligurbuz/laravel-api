<?php 

namespace App\Client\Customer\Images\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\CustomerImage;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [CustomerImage::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['customer_image_code' => 'required|integer'];
}
