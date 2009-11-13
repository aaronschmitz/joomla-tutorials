<?php
/**
 * @version    $Id$
 * @package    Joomla16.Tutorials
 * @subpackage Components
 * @copyright  Copyright (C) 2005 - 2009 Open Source Matters, Inc. All rights reserved.
 * @author     Christophe Demko
 * @link       http://joomlacode.org/gf/project/helloworld_1_6/
 * @license    GNU/GPL
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla controller library
jimport('joomla.application.component.controller');
/**
 * General Controller of HelloWorld component
 */
class HelloWorldController extends JController
{
	function __construct($config=array())
	{
		parent::__construct($config);
		// Set some global property
		$document = &JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-helloworld {background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
	}
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) 
	{
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'HelloWorldList'));
		// call parent behavior
		parent::display($cachable);
	}
}

