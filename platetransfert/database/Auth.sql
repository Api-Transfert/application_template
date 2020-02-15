-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 08:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `cat_name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Wordpress', 'wordpress', '2018-06-12 10:00:20', '0000-00-00 00:00:00'),
(7, 'Web Design', 'web-design', '2018-06-21 10:02:16', '0000-00-00 00:00:00'),
(8, 'PhotoShop', 'photoshop', '2018-06-23 09:14:19', '0000-00-00 00:00:00'),
(9, 'Sports', 'sports', '2018-06-23 09:14:37', '0000-00-00 00:00:00'),
(10, 'Programming', 'programming', '2018-06-23 09:16:35', '0000-00-00 00:00:00'),
(11, 'News', 'news', '2018-07-16 08:36:58', '2018-07-16 05:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `content` text NOT NULL,
  `deleted_at` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `allow_comments` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `category_id`, `user_id`, `slug`, `meta_desc`, `meta_keywords`, `featured_img`, `status`, `content`, `deleted_at`, `created_at`, `updated_at`, `allow_comments`) VALUES
(3, 'Our Security Policy has been Update', 7, 1, 'our-security-policy-has-been-update', 'dummy description', 'one,two', 'http://localhost/login/uploads/blog_images/ps4.jpg', 1, '<p>some content</p>', 'Null', '2018-06-23 02:52:59', '2018-06-23 06:12:56', 1),
(4, 'Laravel and Vue.js in action', 10, 1, 'laravel-and-vuejs-in-action', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Laravel, Php, Vue.js', 'http://localhost/login/uploads/blog_images/vue-spa-with-laravel.png', 1, '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-family: Helvetica;\">L</span><span style=\"font-family: Helvetica;\">?</span><span style=\"font-family: Helvetica;\">orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</span></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-family: Helvetica;\">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</span></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-family: Helvetica;\">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</span></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-family: Helvetica;\">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</span></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-family: Helvetica;\">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</span></p>', 'Null', '2018-06-23 06:20:42', '2018-06-23 06:20:42', 1),
(5, 'Create Restfull API with Laravel 5.3', 7, 1, 'create-restfull-api-with-laravel-53', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et,', 'Restful API, Laravel, Larave 5.3,API', 'http://localhost/login/uploads/blog_images/Laravel-51.png', 1, '<hr style=\"margin: 0px; padding: 0px; border-top: 0px; clear: both; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" center;\"=\"\"><div id=\"Content\" style=\"margin: 0px; padding: 0px; position: relative; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" center;\"=\"\"><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-bottom: 15px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style=\"margin-bottom: 15px; padding: 0px;\"><br></p></div></div></div>', 'Null', '2018-06-23 06:24:44', '2018-08-04 02:34:18', 1),
(6, 'laravel vs codeigniter', 10, 1, 'laravel-vs-codeigniter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero.', 'Laravel, Codeigniter', 'http://localhost/login/uploads/blog_images/laravel-vs-codeigniter-2.jpg', 1, '<div id=\"Content\" style=\"margin: 0px; padding: 0px; position: relative; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"><div class=\"boxed\" style=\"margin: 10px 28.7969px; padding: 0px; clear: both;\"><div id=\"lipsum\" style=\"margin: 0px; padding: 0px; text-align: justify;\"><p style=\"margin-bottom: 15px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style=\"margin-bottom: 15px; padding: 0px;\">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style=\"margin-bottom: 15px; padding: 0px;\">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style=\"margin-bottom: 15px; padding: 0px;\">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style=\"margin-bottom: 15px; padding: 0px;\">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p></div></div></div>', 'Null', '2018-06-23 06:27:28', '2018-06-23 06:27:28', 1),
(7, 'Photoshop new version', 8, 1, 'photoshop-new-version', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero.', 'photoshop, new-version,designing', 'http://localhost/login/uploads/blog_images/Photoshop.jpg', 1, '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 06:30:29', '2018-06-23 06:30:29', 1),
(8, 'England made highest runs score in world cricket', 9, 1, 'england-made-highest-runs-score-in-world-cricket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt.', 'england, cricket, sports,England -cricket', 'http://localhost/login/uploads/blog_images/skysports-jason-roy-roy-england_4340099.jpg', 1, '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 06:35:36', '2018-06-23 06:35:36', 1),
(10, 'Ronalod Best Goals', 9, 1, 'ronalod-best-goals', 'Ronaldo Best Goals', 'football, Ronaldo,cr7', 'http://localhost/login/uploads/blog_images/skynews-ronaldo-portugal-football_4338029.jpg', 1, '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non sapien vulputate, convallis lectus et, commodo libero. Mauris varius nisl bibendum porta tincidunt. Suspendisse vitae dui efficitur, ullamcorper ligula eu, sagittis arcu. Curabitur euismod neque nec suscipit consectetur. Donec rutrum nec magna vel auctor. Duis sapien velit, pharetra sit amet urna et, consequat elementum velit. Integer eros eros, condimentum eget enim vel, consectetur euismod est. Nam sodales congue convallis. Donec nunc magna, suscipit eget posuere in, viverra a lorem.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec vel placerat massa. Integer nisi libero, venenatis vitae vulputate in, cursus ut magna. Suspendisse potenti. Sed sit amet venenatis turpis, vitae consequat est. Mauris vitae sem id erat gravida vestibulum. Nullam venenatis at quam eget pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sit amet eleifend metus, non elementum enim. Nulla rhoncus, orci in commodo hendrerit, ipsum massa vulputate tellus, vitae tempor nibh nunc nec velit. Nullam viverra, turpis eu gravida rutrum, mi orci viverra lorem, id facilisis est turpis varius diam. Nunc sed tincidunt ligula, quis convallis lacus. Fusce facilisis faucibus lectus, a laoreet nunc facilisis eu. Mauris faucibus, purus ut facilisis ultrices, nibh diam luctus ex, et interdum eros mauris eget nulla. Mauris volutpat nibh at lectus ullamcorper aliquet. Fusce consectetur commodo eros, ut fringilla dolor tempor non. Etiam ac libero vel turpis commodo aliquet a quis est.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Donec ut odio pharetra, ullamcorper tellus non, luctus mi. Nulla imperdiet lorem tellus, vitae scelerisque lacus porta eget. Mauris vel odio dolor. Quisque fringilla at nulla id auctor. Nam molestie finibus tortor, ut dapibus nisi feugiat sed. Vestibulum gravida eros sed arcu consectetur, dictum interdum tortor condimentum. Aliquam consectetur elit a mi faucibus, a consectetur arcu vestibulum. Cras vel dui et mi pretium condimentum sed nec sapien. Vestibulum finibus volutpat massa.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Quisque porta massa id elementum facilisis. Vestibulum a imperdiet orci. Proin gravida odio a maximus fermentum. Mauris molestie eget nisl in ultrices. Phasellus quis risus velit. Donec finibus mi gravida mi gravida sagittis. Duis nec ullamcorper felis, eu posuere lectus. Ut tincidunt, quam eget aliquet egestas, erat enim pulvinar nisi, ac ultrices tellus nunc nec tellus. Sed vitae lacus vitae dui facilisis volutpat. Ut congue ex vitae purus dictum, nec elementum mi aliquam. Mauris elit diam, tempus quis feugiat sit amet, mattis et sapien. Sed eu dolor commodo, volutpat odio ac, viverra odio.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Integer mauris dolor, scelerisque quis lorem vitae, euismod convallis massa. Nulla consequat ligula at justo efficitur, in porta massa porta. Vivamus interdum sagittis diam, vitae ultricies diam sagittis ut. Quisque fringilla nunc id libero mollis facilisis. Nam eu scelerisque sapien, sed varius velit. Curabitur purus magna, finibus vitae suscipit eu, bibendum nec mi. Quisque neque neque, pulvinar at ullamcorper in, aliquet eu libero. Maecenas sed dapibus diam. Phasellus pretium scelerisque lectus, a molestie erat sodales in. Suspendisse euismod mollis neque, non lacinia eros viverra sit amet. Ut venenatis diam mollis sem interdum, id luctus dui pretium.</p>', 'Null', '2018-06-23 07:09:52', '2018-06-23 07:09:52', 1),
(11, 'About President of pakistan', 9, 1, 'about-president-of-pakistan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kjhk,khkjh', 'http://localhost/login/uploads/blog_images/33868369_190291285125095_8752566590974722048_n_(1).jpg', 1, '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\"><b><u>Lorem ipsum dolor sit amet, consectetur adipiscing elit:</u></b></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Praesent porta est at sapien ultrices, sit amet semper justo tempus. Nam convallis sapien nec tortor dignissim fermentum. Nunc dignissim tempor tortor, nec porttitor risus volutpat sit amet. Suspendisse luctus ullamcorper mi. Maecenas ultrices mi a ex congue, at dictum leo eleifend. In nisl nisl, ultricies ut metus a, ornare scelerisque nisl. Quisque dolor dui, suscipit sed rhoncus nec, accumsan et lorem. Donec eu bibendum nibh. Sed id elit urna. Curabitur pulvinar tristique lacus vel molestie. Praesent sit amet erat sed diam imperdiet lacinia ut ac magna. Aliquam ultricies, sem semper dictum placerat, nisl nunc iaculis felis, vel tincidunt tortor massa quis est. Integer finibus at risus id feugiat.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\"><b><u>Curabitur in velit vitae eros rutrum vulputate id quis velit:</u></b></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Proin nunc massa, commodo vitae nisi eget, egestas efficitur mi. Morbi sit amet imperdiet sem. Suspendisse fermentum sem non nunc mattis, hendrerit convallis orci pellentesque. Integer tempus vel est sit amet rhoncus. Integer sed pretium libero, sed posuere elit. Donec vel varius mauris, ut sollicitudin dolor. Maecenas bibendum elit sit amet blandit scelerisque.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\"><b><u>Quisque nec nunc quam:</u></b></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Cras condimentum pharetra mi et imperdiet. Duis consectetur mi sit amet ex sodales, ut interdum orci ornare. Mauris venenatis erat et nisl tincidunt dignissim. In hac habitasse platea dictumst. Nam suscipit nisi interdum faucibus dignissim. Aliquam porttitor lectus sit amet libero posuere finibus quis sit amet sapien. Nullam varius neque lectus, in aliquam neque sodales eleifend.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\"><b><u>Proin id justo eget justo venenatis tempus a sed leo.</u></b></p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Nam ut congue lorem. Vivamus enim justo, congue nec justo et, maximus elementum eros. Sed et tincidunt tellus. Nunc ultrices maximus massa sed ultricies. Donec faucibus hendrerit nulla. Mauris gravida orci eget nisi sodales, nec elementum libero dapibus. Cras lacus ante, ullamcorper eu tempor ut, dictum at mi. Aenean id vehicula tellus, sed varius diam. Etiam egestas convallis vulputate. Nullam nisi tellus, blandit ut nisl in, tincidunt placerat arcu. Morbi sed ultrices justo, eget mollis magna.</p>', 'Null', '2018-07-14 12:37:37', '2018-07-30 12:09:25', 1),
(12, 'Nawaz Sharif\'s audio message from Adiala jail', 11, 1, 'nawaz-sharifs-audio-message-from-adiala-jail', 'LAHORE: Ousted prime minister Nawaz Sharif and Pakistan Muslim League-N (PML-N) Quaid Nawaz Sharif and his daughter Maryam Nawaz', 'nawaz,Maryam,maryam-nawaz', 'http://localhost/login/uploads/blog_images/l_342150_102047_updates.jpg', 1, '<p class=\"\" style=\"margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;\">LAHORE: Ousted prime minister Nawaz Sharif and Pakistan Muslim League-N (PML-N) Quaid Nawaz Sharif and his daughter Maryam Nawaz, currently lodged in Rawalpindi\'s Adiala jail in a corruption case, have issued audio messages for the people of Pakistan.<br></p><p style=\"margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;\">Addressing his party workers and leaders in his recorded message, Nawaz said he had been put in jail to keep him away from them. “My daughter, who’s a daughter of the nation, has also been lodged in jail,” he said adding that the opponents did not know that the prison and imprisonment could not sever his relationship with his people.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;\">“Neither any dictator could break off that relationship in the past nor those pulling the strings would be able to do so today,” asserted Nawaz Sharif. He requested the people to pray for recovery of his critically ill wife, whom he left behind, in a London hospital, to return to his country. He said the entire country had been turned into a jail. He said now was the time to stand up and break all shackles. He said the time had reached that people would have to free themselves from the (illegal) restrictions and to do away with the games being played with them for the last 70 years.</p><p style=\"margin-top: 20px; margin-bottom: 20px; font-size: 18px; line-height: 27px; font-family: Merriweather;\">He said such games with masses have turned the Quaid-e-Azam’s Pakistan into a laughing stock. “That’s why I have raised the slogan of ‘Vote Ko Izzat Do’ (Give Respect to Vote. Now it’s your turn to carry this flag (movement) forward.</p>', 'Null', '2018-07-16 05:44:44', '2018-07-16 05:44:44', 1),
(13, 'we are adding some new post', 6, 1, 'we-are-adding-some-new-post', 'i am adding new post', 'keyword1, keyword2', 'http://localhost/login/uploads/blog_images/Photoshop1.jpg', 0, '<p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><u style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit:</u></span></p><p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\">Praesent porta est at sapien ultrices, sit amet semper justo tempus. Nam convallis sapien nec tortor dignissim fermentum. Nunc dignissim tempor tortor, nec porttitor risus volutpat sit amet. Suspendisse luctus ullamcorper mi. Maecenas ultrices mi a ex congue, at dictum leo eleifend. In nisl nisl, ultricies ut metus a, ornare scelerisque nisl. Quisque dolor dui, suscipit sed rhoncus nec, accumsan et lorem. Donec eu bibendum nibh. Sed id elit urna. Curabitur pulvinar tristique lacus vel molestie. Praesent sit amet erat sed diam imperdiet lacinia ut ac magna. Aliquam ultricies, sem semper dictum placerat, nisl nunc iaculis felis, vel tincidunt tortor massa quis est. Integer finibus at risus id feugiat.</p><p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><u style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Curabitur in velit vitae eros rutrum vulputate id quis velit:</u></span></p><p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\">Proin nunc massa, commodo vitae nisi eget, egestas efficitur mi. Morbi sit amet imperdiet sem. Suspendisse fermentum sem non nunc mattis, hendrerit convallis orci pellentesque. Integer tempus vel est sit amet rhoncus. Integer sed pretium libero, sed posuere elit. Donec vel varius mauris, ut sollicitudin dolor. Maecenas bibendum elit sit amet blandit scelerisque.</p><p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><u style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Quisque nec nunc quam:</u></span></p><p open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"margin-bottom: 15px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: inherit; font-family: &quot;Open Sans&quot;; vertical-align: baseline; color: rgb(50, 50, 50); text-align: justify;\">Cras condimentum pharetra mi et imperdiet. Duis consectetur mi sit amet ex sodales, ut interdum orci ornare. Mauris venenatis erat et nisl tincidunt dignissim. In hac habitasse platea dictumst. Nam suscipit nisi interdum faucibus dignissim. Aliquam porttitor lectus sit amet libero posuere finibus quis sit amet sapien. Nullam varius neque lectus, in aliquam neque sodales eleifend.</p>', '2018-11-07 05:03:58', '2018-07-23 19:14:06', '2018-07-23 19:14:06', 0),
(14, 'Reprehenderit deser', 6, 1, 'reprehenderit-deser', 'Nihil ut vero et fac', 'Delectus odio paria', 'http://localhost/login/uploads/blog_images/IMG20190226145949.jpg', 1, 'sflksjfklsjflksdjf', 'Null', '2019-02-26 13:03:16', '2019-02-26 13:03:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_tags`
--

CREATE TABLE `blog_post_tags` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post_tags`
--

INSERT INTO `blog_post_tags` (`id`, `post_id`, `tag_id`) VALUES
(10, 1, 1),
(11, 1, 4),
(12, 1, 5),
(13, 2, 2),
(14, 2, 4),
(15, 2, 6),
(18, 3, 1),
(19, 3, 2),
(20, 4, 10),
(21, 4, 11),
(24, 6, 12),
(25, 6, 14),
(26, 7, 10),
(27, 7, 11),
(28, 8, 8),
(29, 9, 14),
(30, 10, 4),
(31, 10, 7),
(35, 12, 11),
(36, 12, 12),
(37, 12, 13),
(44, 13, 4),
(45, 13, 7),
(46, 13, 8),
(47, 11, 4),
(48, 11, 7),
(49, 11, 8),
(53, 5, 12),
(54, 5, 13),
(55, 5, 14),
(56, 14, 4),
(57, 14, 7),
(58, 14, 8);

-- --------------------------------------------------------

--
-- Table structure for table `blog_settings`
--

CREATE TABLE `blog_settings` (
  `id` int(11) NOT NULL,
  `enable_comments` tinyint(4) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_kewords` text NOT NULL,
  `per_page_posts` int(10) NOT NULL,
  `default_img` text NOT NULL,
  `enable_category_posts` tinyint(4) NOT NULL,
  `enable_recent_post` tinyint(4) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `Linkedin` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_settings`
--

INSERT INTO `blog_settings` (`id`, `enable_comments`, `meta_description`, `meta_kewords`, `per_page_posts`, `default_img`, `enable_category_posts`, `enable_recent_post`, `youtube`, `Linkedin`, `facebook`) VALUES
(1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'sports,news,cricket,football', 8, 'http://localhost/login/uploads/blogging-SMB2.png', 1, 1, 'http://youtube.com/', 'https://linkedin.com/', 'http://facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Articles', 'articles', '2018-06-12 09:59:38', '0000-00-00 00:00:00'),
(4, 'ronaldo', 'ronaldo', '2018-06-12 10:28:48', '0000-00-00 00:00:00'),
(7, 'football', 'football', '2018-06-23 09:15:15', '0000-00-00 00:00:00'),
(8, 'cricket', 'cricket', '2018-06-23 09:15:21', '0000-00-00 00:00:00'),
(9, 'messi', 'messi', '2018-06-23 09:15:25', '0000-00-00 00:00:00'),
(10, 'css', 'css', '2018-06-23 09:15:48', '0000-00-00 00:00:00'),
(11, 'bootstrap', 'bootstrap', '2018-06-23 09:15:54', '0000-00-00 00:00:00'),
(12, 'laravel', 'laravel', '2018-06-23 09:22:18', '0000-00-00 00:00:00'),
(13, 'laravel restfull api\'s', 'laravel-restfull-apis', '2018-06-23 09:22:34', '0000-00-00 00:00:00'),
(14, 'codeigniter', 'codeigniter', '2018-06-23 09:22:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `word` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(95, NULL, '::1', NULL),
(94, NULL, '::1', NULL),
(93, NULL, '::1', NULL),
(92, NULL, '::1', NULL),
(91, NULL, '::1', NULL),
(90, NULL, '::1', NULL),
(89, NULL, '::1', NULL),
(88, NULL, '::1', NULL),
(155, 1506493472, '::1', 'LZCV6ISP'),
(143, 1506492915, '::1', '7WxjqlFC'),
(144, 1506492932, '::1', 'Mr2fRDem'),
(145, 1506492959, '::1', 'lZdK1Yzg'),
(146, 1506492988, '::1', 'm8ezTko7'),
(147, 1506492992, '::1', 'fcJsHOil'),
(148, 1506493027, '::1', '9W1qhZzr'),
(149, 1506493090, '::1', 'oCm3xKTp'),
(150, 1506493112, '::1', 'ast0VMcS'),
(151, 1506493175, '::1', 'QT7vqdVC'),
(152, 1506493194, '::1', 'OPyn5qkH'),
(153, 1506493353, '::1', 'mc2WCAs3'),
(154, 1506493370, '::1', 'IJzTfuqg');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'genrale user');

-- --------------------------------------------------------

--
-- Table structure for table `group_perm`
--

CREATE TABLE `group_perm` (
  `id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `perm_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_perm`
--

INSERT INTO `group_perm` (`id`, `group_id`, `perm_id`) VALUES
(487, 31, 10),
(488, 31, 11),
(489, 31, 12),
(542, 32, 10),
(543, 32, 11),
(544, 32, 14),
(545, 33, 13),
(546, 33, 14),
(547, 33, 15),
(548, 33, 16),
(549, 0, 10),
(550, 0, 11),
(551, 0, 13),
(568, 0, 10),
(569, 0, 11),
(575, 35, 10),
(590, 38, 10),
(591, 38, 11),
(592, 38, 12),
(593, 41, 12),
(594, 41, 13),
(595, 41, 14),
(596, 43, 10),
(597, 43, 11),
(598, 43, 12),
(599, 44, 16),
(611, 45, 17),
(622, 46, 10),
(623, 46, 11),
(624, 47, 10),
(625, 47, 11),
(626, 48, 10),
(627, 48, 11),
(628, 48, 12),
(629, 48, 14),
(630, 49, 11),
(631, 49, 12),
(635, 50, 10),
(636, 50, 13),
(660, 51, 12),
(661, 51, 13),
(662, 51, 16),
(663, 51, 17),
(702, 52, 10),
(703, 52, 11),
(704, 52, 17),
(725, 53, 10),
(726, 53, 11),
(727, 53, 14),
(752, 54, 10),
(753, 54, 16),
(754, 54, 17),
(783, 55, 12),
(1031, 56, 10),
(1032, 56, 11),
(1033, 56, 12),
(1034, 56, 13),
(1035, 56, 14),
(1036, 56, 15),
(1037, 56, 16),
(1062, 57, 10),
(1106, 2, 10),
(1107, 2, 11),
(1108, 2, 17),
(1109, 58, 10),
(1110, 58, 11),
(1111, 58, 12),
(1112, 58, 20),
(1134, 59, 10),
(1135, 59, 11),
(1136, 59, 12),
(1137, 59, 13),
(1138, 59, 14),
(1139, 59, 15),
(1454, 1, 84),
(1455, 1, 85),
(1456, 1, 86),
(1457, 1, 87),
(1458, 1, 88),
(1459, 1, 89),
(1460, 1, 90),
(1461, 1, 91),
(1462, 1, 92),
(1463, 1, 93),
(1464, 1, 95),
(1465, 1, 96),
(1466, 1, 97),
(1467, 1, 98),
(1468, 1, 99),
(1469, 1, 100),
(1470, 1, 101),
(1471, 1, 102),
(1472, 1, 103),
(1473, 1, 104),
(1474, 1, 105),
(1475, 1, 106),
(1476, 1, 107),
(1477, 1, 108),
(1478, 1, 109),
(1479, 1, 110),
(1480, 1, 115),
(1481, 1, 116),
(1489, 60, 84),
(1490, 60, 85),
(1491, 60, 86),
(1492, 60, 87);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(5, '::1', 'fahad.legend@gmail.com', 1570529418);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(10) UNSIGNED NOT NULL,
  `perm_name` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `url` text,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_name`, `menu_name`, `slug`, `level`, `parent_id`, `url`, `icon`, `created_at`, `updated_at`) VALUES
(84, 'Dashboard', 'head', 'dashboard', 0, 0, 'users/Auth', '<i class=\"fa fa-dashboard\"></i>', '2019-10-08 11:23:41', '0000-00-00 00:00:00'),
(85, 'Users', 'head', 'users', 0, 0, '', '<i class=\"fa fa-users\"></i>', '2019-10-04 07:13:34', '0000-00-00 00:00:00'),
(86, 'View Users', 'sub', 'view-users', 1, 85, 'users/Users', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:13:56', '0000-00-00 00:00:00'),
(87, 'Add Users', 'sub', 'add-users', 1, 85, 'users/Users/create_user', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:14:14', '0000-00-00 00:00:00'),
(88, 'Roles & permissions', 'head', 'roles-permissions', 0, 0, '', '<i class=\"fa fa-cogs\"></i>', '2019-10-04 07:14:39', '0000-00-00 00:00:00'),
(89, 'View Groups', 'sub', 'view-groups', 1, 88, 'users/User_groups', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:15:00', '0000-00-00 00:00:00'),
(90, 'Create Groups', 'sub', 'create-groups', 1, 88, 'users/User_groups/create_group', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-08 11:07:56', '0000-00-00 00:00:00'),
(91, 'Permissions', 'sub', 'permissions', 1, 88, 'users/permissions', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:15:33', '0000-00-00 00:00:00'),
(92, 'Site Configuration', 'head', 'site-configuration', 0, 0, 'site_config', '<i class=\"fa fa-wrench\"></i>', '2019-10-04 07:16:02', '0000-00-00 00:00:00'),
(93, 'Adminstrator', 'head', 'adminstrator', 0, 0, 'users/Profile', '<i class=\"fa fa-list\"></i>', '2019-10-04 07:16:28', '0000-00-00 00:00:00'),
(95, 'Social login config', 'head', 'social-login-config', 0, 0, '', '<i class=\"fa fa-cog\"></i>', '2019-10-04 07:20:10', '0000-00-00 00:00:00'),
(96, 'Facebook Login', 'sub', 'facebook-login', 1, 95, 'site_config/fb_config', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:21:07', '0000-00-00 00:00:00'),
(97, 'Google Login', 'sub', 'google-login', 1, 95, 'site_config/google_config', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:21:31', '0000-00-00 00:00:00'),
(98, 'Instagram Login', 'sub', 'instagram-login', 1, 95, 'site_config/insta_config', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:23:01', '0000-00-00 00:00:00'),
(99, 'Linkedin Login', 'sub', 'linkedin-login', 1, 95, 'site_config/linkedin_config', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:23:19', '0000-00-00 00:00:00'),
(100, 'Backup & Export Users', 'head', 'backup-export-users', 0, 0, 'site_config/backup', '<i class=\"fa fa-database\" aria-hidden=\"true\"></i>', '2019-10-08 11:22:41', '0000-00-00 00:00:00'),
(101, 'Manage Tasks', 'head', 'manage-tasks', 0, 0, 'todo', '<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>', '2019-10-04 07:24:10', '0000-00-00 00:00:00'),
(102, 'Documentation', 'head', 'documentation', 0, 0, 'userguide', '<i class=\" fa fa-book\"></i>', '2019-10-04 07:24:27', '0000-00-00 00:00:00'),
(103, 'Extras', 'head', 'extras', 0, 0, '', '', '2019-10-04 07:24:40', '0000-00-00 00:00:00'),
(104, 'Dashboard', 'head', 'dashboard', 0, 0, 'extras/dashboard', '<i class=\"fa fa-home\"></i>', '2019-10-04 07:25:14', '0000-00-00 00:00:00'),
(105, 'Frontend', 'head', 'frontend', 0, 0, 'frontend/frontend', '<i class=\" fa fa-desktop\"></i>', '2019-10-04 07:25:40', '0000-00-00 00:00:00'),
(106, 'Layouts', 'head', 'layouts', 0, 0, '', '<i class=\"fa fa-laptop\"></i>', '2019-10-04 07:25:56', '0000-00-00 00:00:00'),
(107, 'Boxed Page', 'sub', 'boxed-page', 1, 106, 'extras/layout_boxed', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:26:25', '0000-00-00 00:00:00'),
(108, 'Horizontal Menu', 'sub', 'horizontal-menu', 1, 106, 'extras/layout_horizontal', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:26:46', '0000-00-00 00:00:00'),
(109, 'Mega Menu', 'sub', 'mega-menu', 1, 106, 'extras/mega_menu', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:27:05', '0000-00-00 00:00:00'),
(110, 'Email Template', 'sub', 'email-template', 1, 106, 'extras/app_inbox', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>', '2019-10-04 07:27:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `registration_status` tinyint(4) NOT NULL,
  `forgot_pass_status` tinyint(4) NOT NULL,
  `socail_login_status` tinyint(4) NOT NULL,
  `two_factor_auth` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `registration_status`, `forgot_pass_status`, `socail_login_status`, `two_factor_auth`) VALUES
(1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `task_img` text,
  `task_status` varchar(255) NOT NULL,
  `completed_status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `description`, `task_img`, `task_status`, `completed_status`, `created_at`, `updated_at`) VALUES
(2, 'Aut voluptate assume', 'Suscipit ea voluptas', 'http://localhost/flatlab/uploads/task_images/7-ARISTOCRAT_HELIX_LOGIC_01.jpg', 'completed', 1, '2019-07-26 13:26:47', '2019-07-19 12:32:39'),
(8, 'sdfsd', 'sdfsdfsdf', 'http://localhost/login/uploads/task_images/1.jpg', 'completed', 1, '2019-07-30 13:12:09', '2019-07-26 10:43:30'),
(9, 'abdul', 'basit', 'http://localhost/login/uploads/task_images/44106497_1968762883211385_9032143776256098304_n.jpg', 'inprogress', 0, '2019-07-30 10:13:47', '2019-07-30 10:13:47'),
(11, 'sfjsdlkj', 'ljskldfjslkdf', 'http://localhost/login/uploads/task_images/43818242_1254830074669033_4818334841316329129_n.jpg', 'completed', 1, '2019-07-30 13:12:00', '2019-07-30 10:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bio` text NOT NULL,
  `user_img` text NOT NULL,
  `verification_code` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `date`, `bio`, `user_img`, `verification_code`) VALUES
(132, 'google', '::1', 'salman iqbal', '$2y$08$QBr5RQ/M8z5KG5Prt45VR.OHNRaaJZrbb5prNcC4mGIfolpHxnP92', NULL, 'si878411@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'KeQUiSdFvJY4PScbgOJWKO', 1512236892, '1512236892', 1, 'salman', 'iqbal', 'khkhkjh', '4234234', '2017-12-02', '', '', 0),
(1, '', '::1', 'administrator', '$2y$12$y2Aqzx85jLC.z3jo53C0d.6fRzwmrL2.Ccz122UXAAgKzAGYrtzsq', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1551200379, '1570600067', 1, 'atta', 'ullah atta', 'parexons', '0809809809', '2019-02-26', '', '', 0),
(154, 'google', '::1', 'Salman Iqbal', '$2y$08$Nwm2lfgxvshtl9IC9nplGuaBxgMklsMvUmXtLzDZIjC7dO1/LxfFa', NULL, 'salmaniqbal@codeforpakistan.org', NULL, '8e8ae1d2afb22b3c89e1d692ce7068289dff3d41', NULL, NULL, NULL, NULL, NULL, 1539789551, NULL, 0, 'Salman', 'Iqbal', 'gdfgdfgdd', '2423424', '2018-10-17', '', '', 0),
(138, 'local', '::1', 'salman_iqbal889', '$2y$08$k1BxvjgPvunFsbLCgEouLeqsSqiG.0OKb5bw86PFvvxnxKApr2PIa', NULL, 'sklfjsdflk@gmail.com', NULL, '0b463f919f1cdc3a61a117d648dc77c14e657fbe', NULL, NULL, NULL, NULL, NULL, 1516432233, NULL, 0, 'skdjfklj', 'kjslfj', NULL, NULL, '2018-01-20', '', '', 0),
(139, 'local', '::1', 'kjsdkfljskl', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', NULL, 'si8782341@gmail.com', NULL, 'b9496dff542251c51f67553612ab8486a07dca0e', NULL, NULL, NULL, NULL, NULL, 1516432260, NULL, 0, 'sdjflskj', 'jklsjdflkj', 'trustech solution', '03239047937', '2018-01-20', '', '', 0),
(140, 'local', '::1', 'slkfdjsdklj', '$2y$08$QOlQ.06yWN6aT/tX2s5zO.D/fPVA7ekVZIcJUdBjMyjAhrD3FPP7i', NULL, 'shahzad@yahoo.com', NULL, 'd628a67228871eee793935cb9ce1b97e86a7d71b', NULL, NULL, NULL, NULL, NULL, 1516432317, NULL, 0, 'slkjflk', 'jlksjfkl', NULL, NULL, '2018-01-20', '', '', 0),
(152, 'local', '::1', 'code_master11', '$2y$12$y2Aqzx85jLC.z3jo53C0d.6fRzwmrL2.Ccz122UXAAgKzAGYrtzsq', NULL, 'codemaster@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1520154240, '1553249922', 1, 'code', 'master', 'The Nerd Camp', '9080980890', '2018-03-04', '', '', 829197),
(143, 'local', '::1', 'slkfjsdlkj', '$2y$08$DK.deATo/t5mf.s4PoWtJ.3CoDqz1p/9sYVQYW82ByVvaR/9WKKDu', NULL, 'si8237841@gmail.com', NULL, '91631c909bf8e38d2fbcae3a35464cd9eb867e2c', NULL, NULL, NULL, NULL, NULL, 1516433786, NULL, 0, 'sdjflkj', 'lkjsldfjlk', NULL, NULL, '2018-01-20', '', '', 0),
(145, 'local', '::1', 'slfjdslkj', '$2y$08$GC5mqnVISo2ylxNT42.Q1umGu6o4dx0MWzSJcJqk5YnC79MGaAiAa', NULL, 'shahzddad@yahoo.com', NULL, 'fc58eca4c712b8ad315fa67c1868660a50ad2604', NULL, NULL, NULL, NULL, NULL, 1517244103, NULL, 0, 'llsdfjlj', 'lskfjlsj', NULL, NULL, '2018-01-29', '', '', 907879),
(146, 'local', '::1', 'mubi', '$2y$08$1dH3X/opa1srQxq1DqyON.7W4xiwTwENlkfal/4eyo0dIjht8mFdS', NULL, 'mubassirhayat@gmail.com', NULL, 'a13c26ffb9c5ed7c8092ea6ccffe64a5eafe09ac', NULL, NULL, NULL, NULL, NULL, 1517244167, NULL, 0, 'lsdjfl', 'jsjfsjf', NULL, NULL, '2018-01-29', '', '', 139214),
(148, 'facebook', '::1', 'Salman Iqbal', '$2y$08$N8p884v4/63e00EiNciUk.0WtFZxqvMsHt9RSkD6NcVi8kcQt1GvS', NULL, 'SalmanIqbal@facebook.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Oy6b6OwAX5Y.TV3tdrItxe', 1519037955, '1519037955', 1, 'Salman', 'Iqbal', NULL, NULL, NULL, '', '', 0),
(150, 'local', '::1', 'sdfdsfds', '$2y$08$MmNWk7J2n2VBS15nAn.Q.uvzI3YpUQZDTFWLWQEForUK1jPf6IT/a', NULL, 'shahzad12@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1519041908, '1519041932', 1, 'dfdsf', 'sdfds', NULL, NULL, '2018-02-19', '', '', 624131),
(155, 'local', '::1', 'rohidar', '$2y$08$u49eLw4eYgEM3rDGsginPegsKi8WM8R7.Kft2DyvS/6hUzOqTwQBS', NULL, 'rohidar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1540021451, '1540021548', 1, 'Rohidar', 'shah', NULL, NULL, '2018-10-20', '', '', 515561);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(306, 122, 2),
(240, 83, 2),
(288, 102, 2),
(239, 1, 1),
(274, 105, 2),
(305, 121, 2),
(285, 109, 2),
(303, 119, 2),
(377, 132, 1),
(378, 132, 2),
(304, 120, 2),
(270, 101, 2),
(272, 103, 2),
(293, 112, 2),
(297, 116, 2),
(302, 118, 2),
(381, 154, 2),
(331, 138, 2),
(376, 158, 2),
(333, 140, 2),
(367, 152, 2),
(336, 143, 2),
(338, 145, 2),
(339, 146, 2),
(341, 148, 2),
(343, 150, 2),
(352, 155, 2),
(375, 139, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_perm`
--
ALTER TABLE `group_perm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_post_tags`
--
ALTER TABLE `blog_post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `blog_settings`
--
ALTER TABLE `blog_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `group_perm`
--
ALTER TABLE `group_perm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1493;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
