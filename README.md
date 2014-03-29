Server installation performed by Ansible
----------------------------------------

### Synopsys

These are some [ansible](http://www.ansible.com) roles I use on my projects.

Although they are not relevant as [ansible-galaxy](https://galaxy.ansible.com/)
roles (too specific), they may prove useful to some people.

Each roles is documented on its own, feel free to investigate subfolders. In
typical order of apparition:

* [install-server](https://github.com/chikamichi/my-ansible-galaxy/tree/master/install-server) (main playbook, check for general usage instructions)
    1. [create-user](https://github.com/chikamichi/my-ansible-galaxy/tree/master/create-user)
    2. [base-packages](https://github.com/chikamichi/my-ansible-galaxy/tree/master/base-packages)

### Interested in using it? Installing locally

`./setup` is provided as a mean of installing those roles in your ansible path
(namely, `~/ansible/roles`, which must exist). Role 'foo-bar' will then be
available as 'chikamichi.foo-bar'.

I may use ansible's `local_action` to perform the setup in the future ;)

*It is not possible to selectively install roles at the moment, sorry.*

### Bootstrapping a project

TODO: rename `setup` to `install`; create `new`, receiving the project's path
as an argument, to quickly bootstrap a new project with `install-server`.

---

MIT license (see LICENSE.txt).
