Easy server installation with Ansible
-------------------------------------

### Synopsys

Here are some [ansible](http://www.ansible.com) roles I wrote for my projects.

I use them to spawn new *Debian* servers.

Although not relevant as [ansible-galaxy](https://galaxy.ansible.com/)
roles (too specific), they may prove useful to some people.

Each role is documented on its own, so feel free to inspect subfolders in this
repository. In typical order of apparition:

* [install-server](https://github.com/chikamichi/my-ansible-galaxy/tree/master/install-server) (main playbook, check for general usage instructions)
    * [create-user](https://github.com/chikamichi/my-ansible-galaxy/tree/master/create-user)
    * [base-packages](https://github.com/chikamichi/my-ansible-galaxy/tree/master/base-packages)
        * [webserver](https://github.com/chikamichi/my-ansible-galaxy/tree/master/webserver)
            * [wordpress](https://github.com/chikamichi/my-ansible-galaxy/tree/master/wordpress)

### Interested in using one of those? How to install locally

`./setup` is provided as a mean of installing the roles under your ansible path
(namely, `~/ansible/roles`, which must exist prior to installing). A role 'foo-bar'
would then be available as 'chikamichi.foo-bar'.

(I may use ansible's `local_action` to perform the setup in the future).

*It is not possible to selectively install a specific role at the moment.*

### Dependencies

Each role's README lists its dependencies. Here is a full list:

* laggyluke.add-ssh-keys-from-github
* Ansibles.apt
* Ansibles.build-essential
* Ansibles.git
* Ansibles.hostname
* Ansibles.monit
* Ansibles.mysql
* Ansibles.nginx
* Ansibles.perl
* knopki.sudoers
* nbz4live.php-fpm

### License

MIT license (see LICENSE.txt).
