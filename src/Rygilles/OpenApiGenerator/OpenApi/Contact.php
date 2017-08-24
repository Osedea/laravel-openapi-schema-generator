<?php

namespace Rygilles\OpenApiGenerator\OpenApi;


/**
 * Contact information for the exposed API.
 *
 * @version 3.0.0
 * @see https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#contactObject
 *
 * @package Rygilles\OpenApiGenerator\OpenApi
 */
class Contact extends Object
{
	/**
	 * The identifying name of the contact person/organization.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The URL pointing to the contact information. MUST be in the format of a URL.
	 *
	 * @var string
	 */
	public $url;

	/**
	 * The email address of the contact person/organization. MUST be in the format of an email address.
	 * 
	 * @var string
	 */
	public $email;
}