Server installation performed by Ansible
----------------------------------------

### Creating users

I always need to create users at some point.

For instance, the `root` user I never use; I'd rather create a user with the
sudoers access level, then execute SSH commands with this remote user.

The role of this playbook is to ease creation of users. It is mostly a tiny
wrapper around ansible's `user` module, so as to make it usable as a role
in dependencies.
