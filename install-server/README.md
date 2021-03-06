Server installation performed by Ansible
----------------------------------------

### Bootstrapping a new, empty, Debian-like server

The one and only playbook here is `install-server.yml`. When bootstrapping a
new project, it should be copied over to
`/project/path/ansible/install-server.yml`.
The executable script `install-server` should be copied over
`/project/path/install-server`.

Installing the server is then two steps away only:

* configure `ansible/install-server.yml`
* run `./install-server`

---

The playbook has several nested dependencies; in order:

- install-server
    - create-user
    - base-packages
        - Ansibles.git
            - Ansibles.build-essential
    - add-ssh-keys-from-github
    - knopki.sudoers
