# H6 Miniprojekti - LAMP Stack Ansiblella

## Joonas Ikonen & Jerry Ahonen

## Projektin tarkoitus

Automaattinen LAMP-palvelin Ansiblella. Voidaan ottaa käyttöön yhdellä komennolla sekä ajaa useita kertoja. Tuloksena nopea ja virheettömästi toistettava web-palvelinympäristö.


## Onnistunut lopputulos

<img width="357" height="157" alt="image" src="https://github.com/user-attachments/assets/61abd6b5-bceb-4119-aabd-4692a370fad3" />


## GitHub-latauslinkki

https://github.com/IkoJoonas/h6-miniprojekti.git

## Käyttöönotto

1.) Kopioi projekti:

```git clone https://github.com/IkoJoonas/h6-miniprojekti.git```

2.) Testaa Ansible ja inventaario:

```ansible -i inventory/hosts all -m ping --ask-become-pass```

3.) Aja playbook:

```ansible-playbook -i inventory/hosts site.yml --ask-become-pass```

4.) Testaa LAMP:

" http://localhost "

```curl -sS http://localhost | head -n 30```

```mysql -u testikäyttäjä -p'testitesti' testi -e "SHOW TABLES;"```

## Lisenssi 

GNU General Public License v3 (GPL-3.0)

