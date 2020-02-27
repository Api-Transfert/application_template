INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Dashboard', 'head', 'dashboard', 0, 0, 'users/Auth', 'fa fa-dashboard', '2020-02-18 23:49:56', null, 1);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Users', 'head', 'users', 0, 0, '', 'fa fa-users', '2020-02-19 01:46:35', null, 3);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('View Users', 'sub', 'view-users', 1, 85, 'users/Users', 'fa fa-dashboard', '2020-02-21 04:39:37', null, 4);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Add Users', 'sub', 'add-users', 1, 85, 'users/Users/create_user', 'fa fa-dashboard', '2020-02-21 04:39:37', null, 5);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Roles & permissions', 'head', 'roles-permissions', 0, 0, '', 'fa fa-unlock-alt', '2020-02-19 01:47:12', null, 6);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('View Groups', 'sub', 'view-groups', 1, 88, 'users/User_groups', 'fa fa-dashboard', '2020-02-21 04:39:37', null, 7);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Create Groups', 'sub', 'create-groups', 1, 88, 'users/User_groups/create_group', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 8);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Permissions', 'sub', 'permissions', 1, 88, 'menu', 'fas fa-dot-circle', '2020-02-21 04:39:38', null, 9);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Site Configuration', 'head', 'site-configuration', 0, 0, 'site_config', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 10);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Adminstrator', 'head', 'adminstrator', 0, 0, 'users/Profile', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 11);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Social login config', 'head', 'social-login-config', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 12);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Facebook Login', 'sub', 'facebook-login', 1, 95, 'site_config/fb_config', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 13);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Google Login', 'sub', 'google-login', 1, 95, 'site_config/google_config', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 14);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Instagram Login', 'sub', 'instagram-login', 1, 95, 'site_config/insta_config', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 15);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Linkedin Login', 'sub', 'linkedin-login', 1, 95, 'site_config/linkedin_config', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 16);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Backup & Export Users', 'head', 'backup-export-users', 0, 0, 'site_config/backup', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 17);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Manage Tasks', 'head', 'manage-tasks', 0, 0, 'todo', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 18);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Documentation', 'head', 'documentation', 0, 0, 'userguide', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 19);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Extras', 'head', 'extras', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 20);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Dashboard', 'head', 'dashboard', 0, 0, 'extras/dashboard', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 21);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Frontend', 'head', 'frontend', 0, 0, 'frontend/frontend', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 22);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Layouts', 'head', 'layouts', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 23);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Boxed Page', 'sub', 'boxed-page', 1, 106, 'extras/layout_boxed', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 24);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Horizontal Menu', 'sub', 'horizontal-menu', 1, 106, 'extras/layout_horizontal', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 25);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Mega Menu', 'sub', 'mega-menu', 1, 106, 'extras/mega_menu', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 26);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Email Template', 'sub', 'email-template', 1, 106, 'extras/app_inbox', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 27);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Profile', 'head', 'read-profile', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 28);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Read Profile', 'sub', 'read-profile', 1, 111, 'Module/Profile', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 29);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Write Profile', 'sub', 'write-profile', 1, 111, 'Module/Profile', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 30);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Pays', 'head', 'pays', 0, 0, 'pays', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 31);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Structures', 'head', 'structures', 0, 0, 'structure', 'fa fa-building', '2020-02-19 01:48:20', null, 32);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Zones', 'head', 'zones', 0, 0, 'reseau', 'fa fa-dashboard', '2020-02-21 04:15:02', null, 34);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Agences', 'sub', 'agences', 1, 115, 'structure/agence', ' fa fa-home', '2020-02-21 04:39:38', null, 33);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Agents', 'head', 'agents', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 35);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Sous-distributeurs', 'head', 'sous-distributeurs', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 36);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Masters', 'head', 'masters', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 37);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Quota', 'head', 'quota', 0, 0, '', 'fa fa-dashboard', '2020-02-18 23:49:57', null, 38);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Validation', 'sub', 'validation', 1, 122, 'Modules/quota/validation', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 39);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Versements', 'sub', 'versements', 1, 122, 'Modules/quota/versement', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 40);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Vers. en cours', 'sub', 'vers-en-cours', 1, 122, 'Modules/quota/vers_en_cours', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 41);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Commission', 'head', 'commission', 0, 0, 'commission', 'fa fa-dashboard', '2020-02-18 23:49:58', null, 42);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Emmission', 'head', 'emmission', 0, 0, 'Emission', 'fa fa-usd', '2020-02-19 14:03:39', null, 43);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Cash &agrave; cash', 'sub', 'cash-agrave-cash', 1, 128, 'Emission/cashacash', 'fa fa-dashboard', '2020-02-21 04:39:38', null, 46);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Menu', 'head', 'menu', 0, 0, 'menu', 'fa fa-bars', '2020-02-18 23:49:58', null, 2);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Cash à compte', 'sub', 'cash-a-compte', 1, 128, 'emission/cashacompte', 'fas fa-dot-circle', '2020-02-21 04:39:38', null, 44);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Cash à cash', 'sub', 'cash-a-cash', 1, 128, 'emission/cashawallet', 'fas fa-dot-circle', '2020-02-21 04:39:38', null, 45);
INSERT INTO platetransfert.permissions (perm_name, menu_name, slug, level, parent_id, url, icon, created_at, updated_at, `order`) VALUES ('Structure', 'sub', 'structure', 1, 115, 'structure', 'fas fa-dot-circle', '2020-02-21 04:43:03', null, 0);