<?php

/**
 * $BaseName$
 * $Id$
 *
 * DESCRIPTION
 *  Std ReflectionParameter wrapper support file
 *
 * @link http://nxsys.org/spaces/onx/wiki/Nexus_Common_Library
 * @link https://onx.zulipchat.com
 *
 * @package NxSys.Core\ESC
 * @license http://nxsys.org/spaces/onx/wiki/license
 * Please see the license.txt file or the url above for full copyright and license information.
 * @copyright Copyright 2018 Nexus Systems, inc.
 *
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 * @author $LastChangedBy$
 *
 * @version $Revision$
 */

namespace NxSys\Core\ExtensibleSystemClasses\Reflection;

/**
 * Interface for ReflectionParameter
 *
 * This interface is an extraction of the prototype (contract) from the
 * respective class and exposes it as standard interface. It allows you to
 * 1) typehint on this interface and not miscellaneous concretions and
 * 2) augment and replace code with standard OOP hierarchies. Essentially we're
 * making these classes a little more SOLID.
 *
 * Note: Whith the presence of this interface (and related concretions) you can
 * now easily experiment with partial extensions of the decorated base class.
 * You are encouraged to do so, but do so with care as not all of the internal's
 * operation is well documented...
 *
 * @see \ReflectionParameter
 * @link http://php.net/manual/en/class.reflectionparameter.php
 * @author Chris R. Feamster <cfeamster@f2developments.com>
 */
interface IReflectionParameter
{
	public static function export($function, $parameter, $return);


	public function __construct($function, $parameter);


	public function __toString();


	public function getName();


	public function isPassedByReference();


	public function canBePassedByValue();


	public function getDeclaringFunction();


	public function getDeclaringClass();


	public function getClass();


	public function hasType();


	public function getType();


	public function isArray();


	public function isCallable();


	public function allowsNull();


	public function getPosition();


	public function isOptional();


	public function isDefaultValueAvailable();


	public function getDefaultValue();


	public function isDefaultValueConstant();


	public function getDefaultValueConstantName();


	public function isVariadic();
}
