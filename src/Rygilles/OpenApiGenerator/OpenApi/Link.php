<?php

namespace Rygilles\OpenApiGenerator\OpenApi;


/**
 * The Link object represents a possible design-time link for a response.
 * The presence of a link does not guarantee the caller's ability to successfully invoke it,
 * rather it provides a known relationship and traversal mechanism between responses and other operations.
 *
 * Unlike dynamic links (i.e. links provided in the response payload),
 * the OAS linking mechanism does not require link information in the runtime response.
 *
 * For computing links, and providing instructions to execute them,
 * a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.
 *
 * @version 3.0.0
 * @see https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md#linkObject
 *
 * @package Rygilles\OpenApiGenerator\OpenApi
 */
class Link extends Object
{
	/**
	 * A relative or absolute reference to an OAS operation.
	 * This field is mutually exclusive of the operationId field, and MUST point to an Operation Object.
	 * Relative operationRef values MAY be used to locate an existing Operation Object in the OpenAPI definition.
	 *
	 * @var string
	 */
	public $operationRef;

	/**
	 * The name of an existing, resolvable OAS operation, as defined with a unique operationId.
	 * This field is mutually exclusive of the operationRef field.
	 *
	 * @var string
	 */
	public $operationId;

	/**
	 * A map representing parameters to pass to an operation as specified with operationId or identified via operationRef.
	 * The key is the parameter name to be used,
	 * whereas the value can be a constant or an expression to be evaluated and passed to the linked operation.
	 * The parameter name can be qualified using the parameter location [{in}.]{name}
	 * for operations that use the same parameter name in different locations (e.g. path.id).
	 *
	 * @var mixed[]
	 */
	public $parameters;

	/**
	 * A literal value or {expression} to use as a request body when calling the target operation.
	 *
	 * @var mixed
	 */
	public $requestBody;

	/**
	 * A description of the link.
	 * CommonMark syntax MAY be used for rich text representation.
	 *
	 * @var string
	 */
	public $description;

	/**
	 * A server object to be used by the target operation.
	 *
	 * @var Server
	 */
	public $server;

	/**
	 * {@inheritdoc}
	 */
	protected function getFixedAttributes()
	{
		return [
			'operationRef'  => $this->operationRef,
			'operationId'   => $this->operationId,
			'parameters'    => $this->parameters,
			'requestBody'   => $this->requestBody,
			'description'   => $this->description,
			'server'        => $this->server
		];
	}
}