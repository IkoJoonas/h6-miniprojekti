# H6 Miniprojekti - LAMP Stack Ansiblella

## Joonas Ikonen & Jerry Ahonen

## Projektin tarkoitus

Automaattinen LAMP-palvelin Ansiblella. Voidaan ottaa käyttöön yhdellä komennolla sekä ajaa useita kertoja ilman turhia muutoksia. Tuloksena nopea ja virheettömästi toistettava web-palvelinympäristö, jossa voit julkaista omia verkkosivuja tai web-sovelluksia. (Linux, Apache2, MariaDB & PHP)

#### - Nopea käyttöönotto
#### - Helposti toistettavissa
#### - Versionhallinta ja dokumentointi
#### - Skaalautuvuus


## Onnistunut lopputulos (esimerkkisivu)

<img width="357" height="157" alt="image" src="https://github.com/user-attachments/assets/61abd6b5-bceb-4119-aabd-4692a370fad3" />


## GitHub-latauslinkki

https://github.com/IkoJoonas/h6-miniprojekti.git

## Käyttöönotto

1.) Kopioi projekti:

```git clone https://github.com/IkoJoonas/h6-miniprojekti.git```

2.) Asennetaan tarvittavat paketit ja testataan Ansible ja inventaario

```sudo apt update```

```sudo apt upgrade```

```sudo apt install git ansible python3-mysqldb```

```ansible -i inventory/hosts all -m ping --ask-become-pass```

3.) Aja playbook:

```ansible-playbook -i inventory/hosts site.yml --ask-become-pass```

4.) Testaa LAMP:

" http://localhost "

```curl -sS http://localhost | head -n 30```

```mysql -u testikäyttäjä -p'testitesti' testi -e "SHOW TABLES;"```

## Lisenssi 

GNU General Public License v3 (GPL-3.0)

