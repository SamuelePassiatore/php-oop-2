<?php

//Categories
$cat = new Category('Gatti');
$dog = new Category('Cani');

//Products
$cat_food = new Product('https://imgs.search.brave.com/BU7y9vbm1O3PDyfolgiSE-S1JW5EWuYmzVd4xbKPaKg/rs:fit:400:400:1/g:ce/aHR0cHM6Ly9zaG9w/LWNkbi1tLm1lZGlh/enMuY29tL2JpbGRl/ci9tdWx0aXBhY2sv/YW5pbW9uZGEvY2Fy/bnkvY291bnRyeS9h/ZHVsdC94L2cvYWxp/bWVudG8vdW1pZG8v/cGVyL2dhdHRpLzkv/NDAwLzgzODQyX2Fu/aW1vbmRhX2Nhcm55/X2NvdW50cnlfcHV0/ZV9yaW5kX2hpcnNj/aF8xMDBnX2hzXzAx/XzkuanBn', 'Carne per gatti', 3, $cat, 'Cibo');
$dog_food = new Product('https://imgs.search.brave.com/0D5NkvZR0Wezg1p5BP0rCgJtWMWMgAqQxaP3CggbpHQ/rs:fit:950:950:1/g:ce/aHR0cDovL3d3dy5p/bnRlcmZvb2QuY2gv/X0NNUy9yZXBvc2l0/b3J5L05vcm1hbC8x/NDUtY2lib3VtaWRv/QmVsY2FuZG90YWNj/aGluby5qcGc', 'Carne per cani', 2.50, $dog, 'Cibo');
$cat_game = new Product('https://imgs.search.brave.com/SXd5Y4CLD6gcBQH_-dEIpMq1AQbqYyIvM5e0LdYn97E/rs:fit:691:700:1/g:ce/aHR0cHM6Ly9zdGF0/aWMuem9vbWFsaWEu/Y29tL3Byb2RfaW1n/LzM5MDA5L2xtXzU1/YjUzYjNhM2Q2YWI5/MGNlMDI2ODIyOTE1/MWM5YmRlMTExNTE0/NDc5OTU2LmpwZw', 'Gioco per gatti', 8.99, $cat, 'Gioco');
$dog_game = new Product('https://imgs.search.brave.com/IJDdODH60wk25UOdqPfGh42IK1_b-m-2vASyrvbgNq0/rs:fit:1200:1080:1/g:ce/aHR0cHM6Ly93d3cu/cmV2aWV3Ym94Lml0/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDE5/LzEwL2p1Z3VldGVz/cGFyYXBlcnJvcy1o/ZWFkZXIuanBn', 'Gioco per cani', 6, $dog, 'Gioco');
$cat_house = new Product('https://imgs.search.brave.com/yYS5cTnUZT5qJY52gd6I3_wbsYBZfYiJsJVM0xeJr00/rs:fit:686:705:1/g:ce/aHR0cHM6Ly93d3cu/bWljaW9nYXR0by5p/dC9uZXcvd3AtY29u/dGVudC91cGxvYWRz/LzIwMTcvMTIvY3Vj/Y2lhLXBlci1nYXR0/aS1sZW9uZS02ODZ4/NzA1LmpwZw', 'Cuccia per gatti', 19.50, $cat, 'Casa');
$dog_house = new Product('https://imgs.search.brave.com/kvbsBOiB3RR0j-sr8zYyNDbVwqHQes9J2vbxts58fp4/rs:fit:1200:1200:1/g:ce/aHR0cDovL2Nvc2Vw/ZXJsYWNhc2EubmV0/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDE2/LzA4L2N1Y2NpYS1j/YW5lLmpwZw', 'Cuccia per cani', 35, $dog, 'Casa');
$products = [$cat_food, $dog_food, $cat_game, $dog_game, $cat_house, $dog_house];
