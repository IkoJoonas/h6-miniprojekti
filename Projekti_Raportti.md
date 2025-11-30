## Laitteisto

Host: MacBook Air M2 2022 16Gt / 

Guest: Oracle VM VirtualBox 7.2.0

Virtuaalikone: Debian GNU/Linux 13.1.0 ”Trixie”

Ram: 4GB

Levytila: 60GB

CPU: 1 

## Projekti

Luotiin projekti GitHubiin ja kopiointiin sieltä omaan VM sisään.

Luotiin site.yml tiedosto ja sisältö:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_23_18" src="https://github.com/user-attachments/assets/d7ec5e3c-68bf-4352-9455-22b13e5a70ed" />

Seuraavaksi luotiin Inventory kansio ja sen sisälle hosts-tiedosto:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_23_43" src="https://github.com/user-attachments/assets/4cbb104b-3205-42c2-8174-92423a45de96" />

Seuraavaksi luotiin Roles kansiorakenne, jonka sisälle tuli apache, mariadb ja php:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_24_03" src="https://github.com/user-attachments/assets/534bf488-477f-48ea-8e6d-4403e3544219" />

Apache kansioon luotiin vielä kaksi erillistä kansiota files ja tasks:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_24_23" src="https://github.com/user-attachments/assets/faeb0ea1-8069-4319-8c1d-9af1e7be187b" />

Files kansioon luotiin index.php tiedosto:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_24_39" src="https://github.com/user-attachments/assets/c2a88e2f-9e75-476f-b2d3-caf4dc853e4e" />

Tasks kansioon luotiin main.yml tiedosto:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_25_07" src="https://github.com/user-attachments/assets/c21e9aa8-c0e6-41e3-9976-63df653eb423" />

Seuraavaksi luotiin Mariadb sisälle myös Tasks kansio:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_44_01" src="https://github.com/user-attachments/assets/aed9542e-c06e-4b8f-9aad-34dfb0d9caa6" />

Ja tämän sisälle main.yml tiedosto:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_46_11" src="https://github.com/user-attachments/assets/b3ecd0f7-d710-439c-b095-ab09770fb3f7" />

Vielä piti luoda php kansion sisään tasks kansio ja sen sisälle myös main.yml tiedosto:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_17_47_17" src="https://github.com/user-attachments/assets/907ae956-cf68-4518-896b-304ca2721d1c" />

Ennenkuin suoritettiin Ansiblen playbook käytiin muokkaamassa Apachen dir.conf tiedostoa, lisäämällä index.php ennen index.html:

<img width="705" height="422" alt="Näyttökuva 2025-11-30 kello 18 14 30" src="https://github.com/user-attachments/assets/17fbf17a-70bc-4aae-8a68-32b1305ab140" />

Kokeiltiin toimiiko kaikki odotetusti komennolla -> sudo ansible-playbook -i inventory site.yml

<img width="1180" height="753" alt="Näyttökuva 2025-11-30 kello 18 13 53" src="https://github.com/user-attachments/assets/5907ffa3-ee9d-4181-92c9-e677ba6227b9" />

<img width="1158" height="168" alt="Näyttökuva 2025-11-30 kello 14 54 07" src="https://github.com/user-attachments/assets/02cb9eb4-784b-450d-9de1-4db605890c67" />

Kaikki näytti toimivan, joten seuraavaksi testasimme toimiiko verkkosivu käyttäen komentoa -> curl -sS http://localhost | sed -n '1,30p'

<img width="973" height="535" alt="Näyttökuva 2025-11-30 kello 18 16 34" src="https://github.com/user-attachments/assets/8115b88f-b3ce-49cb-9f00-31aba1dbcf55" />

Idempotenssin vahvistaminen, näytti toimivan:

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_18_00_06" src="https://github.com/user-attachments/assets/9446ad8d-b4c0-4306-9e6f-4f786a5ce125" />

Mysql yhteydellä kirjautuminen MariaDB:hen :

<img width="1280" height="800" alt="VirtualBox_DebianJoonasI_30_11_2025_18_02_51" src="https://github.com/user-attachments/assets/69a62d26-4ff5-4923-8c1c-fa5a76469711" />
