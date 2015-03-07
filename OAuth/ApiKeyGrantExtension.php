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

namespace SpiritDev\Bundle\OAuth2ServerBundle\OAuth;

use Doctrine\Common\Persistence\ObjectRepository;
use FOS\OAuthServerBundle\Storage\GrantExtensionInterface;
use OAuth2\Model\IOAuth2Client;

/**
 * Play at bingo to get an access_token: May the luck be with you!
 *
 * @author Jean BORDAT <bordat.jean@gmail.com>
 * Date    07/03/2015 14:31
 */
class ApiKeyGrantExtension implements GrantExtensionInterface {

    private $userRepository;

    /**
     * @param ObjectRepository $userRepository
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:31
     */
    public function __construct(ObjectRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * {@inheritdoc}
     *
     * @author Jean BORDAT <bordat.jean@gmail.com>
     * Date    07/03/2015 14:31
     */
    public function checkGrantExtension(IOAuth2Client $client, array $inputData, array $authHeaders) {
        $user = $this->userRepository->findOneByApiKey($inputData['api_key']);

        if ($user) {
            //if you need to return access token with associated user
            return array(
                'data' => $user
            );

            //if you need an anonymous user token
            return true;
        }

        return false;
    }
}
