Server installation performed by Ansible
----------------------------------------

### Turning a server into a *web*server

Installs nginx. Just like that!

**No** `upstream` configured in `nginx.conf`.

---

The playbook has several dependencies:

- Ansibles.nginx
  - Ansibles.hostname
  - Ansibles.apt
  - Ansibles.build-essential
  - Ansibles.perl
  - Ansibles.monit
