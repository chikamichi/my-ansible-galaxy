Server installation performed by Ansible
----------------------------------------

These are some [ansible](http://www.ansible.com) roles I use on my projects.

Although they are not relevant as [ansible-galaxy](https://galaxy.ansible.com/)
roles (too specific), they may prove useful to some people.

Each roles is documented on its own, feel free to investigate subfolders. In
typical order of apparition:

* [install-server](https://github.com/chikamichi/my-ansible-galaxy/tree/master/install-server) (main playbook)
    1. [create-user](https://github.com/chikamichi/my-ansible-galaxy/tree/master/create-user) (main playbook)
    2. [base-packages](https://github.com/chikamichi/my-ansible-galaxy/tree/master/base-packages) (main playbook)

`./setup` is provided as a mean of installing those roles in your ansible path
(namely, `~/ansible/roles`, which must exist). Role 'foo-bar' will then be
available as 'chikamichi.foo-bar'.

---

MIT license (see LICENSE.txt).
