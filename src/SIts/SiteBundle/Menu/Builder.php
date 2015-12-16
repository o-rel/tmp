<?php 

namespace SIts\SiteBundle\Menu;

use Knp\Menu\FactoryInterface;
//use Symfony\Component\DependencyInjection\ContainerAware;

class Builder// extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'sits-main-menu'));
        
        $menu->addChild('Home', array('route' => 'sits_site_page_index'));
        $menu->addChild('News', array('route' => 'sits_site_page_index'));
        $menu->addChild('Events', array('route' => 'sits_site_page_index'));
        $menu->addChild('Newspapers', array('route' => 'sits_site_page_index'));
        $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        
        return $menu;
    }
    
    /*public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

        $menu->addChild('Latest Blog Post', array(
            'route' => 'blog_show',
            'routeParameters' => array('id' => $blog->getId())
        ));

        // create another menu item
        $menu->addChild('About Me', array('route' => 'about'));
        // you can also add sub level's to your menu's as follows
        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }*/
}