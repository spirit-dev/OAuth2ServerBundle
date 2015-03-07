<?php
/*
 *                                     _________________________________
 *                                    /       _             _           \
 *             /(        )`          /       /_`_  ._._/___/ | _         \
 *             \ \___   / |       __/      . _//_//// /   /_.'/_'|/       \_
 *             /- _  `-/  '      /            /                             \
 *            (/\/ \ \   /\     /   Jean Bordat ( Twitter @Ji_Bay_ )         |
 *            / /   | `    \  _/   Since 2K10 until today                    |
 *            O O   ) /    |   \  @mail <bordat.jean@gmail.com>              |
 *            `-^--'`<     '    \  Date 07/03/2015                           |
 *           (_.)  _  )   /      \                                           |
 *            `.___/`    /        \_  Code Burner  _________________________/
 *              `-----' /           \_____________/
 * <----.     __ / __   \
 * <----|====O)))==) \) /====
 * <----'    `--' `.__,' \
 *              |        |
 *               \       /
 *          ______( (_  / \_____
 *        ,'  ,-----'   |       \
 *        `--{__________)       \/          hex: 53 70 69 72 69 74 2d 44 65 76
 */

namespace SpiritDev\Bundle\OAuth2ServerBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class OAuth2ServerEvent
 * @package SpiritDev\Bundle\OAuth2ServerBundle\Event
 *
 * @author Jean BORDAT <bordat.jean@gmail.com>
 * Date    07/03/2015 14:29
 */
class OAuth2ServerEvent extends Event {

	protected $data = array();
	protected $isDefaultPrevented = false;
	protected $isPropagationStopped = false;
	public function preventDefault() {
		$this->isDefaultPrevented = true;
	}

	/**
	 * Function returning the status of preventDefault in OAuth2Server Event
	 * @return boolean
	 *
	 * @author Jean BORDAT <bordat.jean@gmail.com>
	 * Date    07/03/2015 14:30
	 */
	public function isDefaultPrevented() {
		return $this->isDefaultPrevented;
	}

	/**
	 * This function the bundle to stop propagation if event triggered
	 *
	 * @author Jean BORDAT <bordat.jean@gmail.com>
	 * Date    07/03/2015 14:30
	 */
	public function stopPropagation() {
		$this->isPropagationStopped = true;
	}

	/**
	 * Function returns the status of PropagationStop value for this bundle
	 * @return boolean
	 *
	 * @author Jean BORDAT <bordat.jean@gmail.com>
	 * Date    07/03/2015 14:30
	 */
	public function isPropagationStopped() {
		return $this->isPropagationStopped;
	}

	/**
	 * Function whitch sets the value of a defined var
	 * @param String $key Represents the name of var to set
	 * @param Mixed $val Represents the value to set with
	 *
	 * @author Jean BORDAT <bordat.jean@gmail.com>
	 * Date    07/03/2015 14:30
	 */
	public function set($key, $val) {
		$this->data[$key] = $val;
	}

	/**
	 * Function returns the defined value for the key parameter
	 * @param  String $key Represents the class variable to return
	 * @return Mixed      Value of the $key parameter
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:30
	 */
	public function get($key) {
		if (!array_key_exists($key, $this->data)) {
			return null;
		}
		return $this->data[$key];
	}

}