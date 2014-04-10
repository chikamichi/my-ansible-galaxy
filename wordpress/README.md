Server installation performed by Ansible
----------------------------------------

### Turning a webserver into a Wordpress instance

Installs a Wordpress stack (PHP-FPM + MySQL + nginx conf), and a Wordpress
instance. Head to `wp_server_name` to configure the Wordpress.


Required vars:

``` yaml
mysql_root_password: 'pass'
mysql_databases:
  - name: wp
  - name: wp_users
mysql_users:
  - name: wp_user
    pass: pass
wp_db_name: wp
wp_db_user: wp_user
wp_db_password: pass
wp_db_prefix: change_me_
wp_server_name: example.com # or an IP address
```

There are some mores, check `vars/` and dependencies' documentation.

At the time being, these two tasks are required as `pre_tasks` in the playbook
using `chikamichi.wordpress`:

``` yaml
pre_tasks:
  - name: Ensure /srv/www/wordpress exists
    file: path=/srv/www/wordpress state=directory
  - name: Ensure /var/run/php5-fpm exists
    file: path=/var/run/php5-fpm state=directory
```

---

This playbook has several dependencies:

- nbz4live.php-fpm
- Ansibles.mysql
- some up & running nginx server (see
[chikamichi.webserver](https://github.com/chikamichi/my-ansible-galaxy/tree/master/webserver)).
