<?php

/*
"INSERT INTO " . station_tbl . " ( line_id , station_id , station_name , station_ranking , middle_area_id ) VALUES
*/
    
				";
		    	$wpdb->query( $sql );

			//Table rows Check
			$sql = "SELECT COUNT(*) AS co FROM ". $table_name . "";
			$metas = $wpdb->get_row( $sql );
			if( !empty( $metas ) ) {
				if( $eki_table_count == $metas->co ){

				}else{
					return 1;
				}
			}else{
					return 1;
			}

		}




		//テーブル 路線県
		if( $table_name == $wpdb->prefix . DB_ROSENKEN_TABLE ){
			$sql = "INSERT INTO " . $table_name . " ( middle_area_id , rosen_id ) VALUES

    array(25, 232),
    array(25, 241),
    array(25, 307),
    array(25, 541),
    array(25, 542),
    array(25, 671),
    array(25, 761),
    array(25, 762),
    array(25, 828),
    array(25, 6000),
    array(26, 11),
    array(26, 231),
    array(26, 232),
    array(26, 236),
    array(26, 243),
    array(26, 293),
    array(26, 296),
    array(26, 306),
    array(26, 309),
    array(26, 312),
    array(26, 494),
    array(26, 536),
    array(26, 538),
    array(26, 539),
    array(26, 541),
    array(26, 555),
    array(26, 561),
    array(26, 610),
    array(26, 672),
    array(26, 673),
    array(26, 2044),
    array(26, 763),
    array(26, 764),
    array(26, 765),
    array(26, 766),
    array(26, 767),
    array(26, 992),
    array(26, 6000),
    array(27, 11),
    array(27, 12),
    array(27, 231),
    array(27, 234),
    array(27, 235),
    array(27, 236),
    array(27, 306),
    array(27, 312),
    array(27, 316),
    array(27, 450),
    array(27, 466),
    array(27, 468),
    array(27, 469),
    array(27, 502),
    array(27, 503),
    array(27, 510),
    array(27, 513),
    array(27, 516),
    array(27, 520),
    array(27, 526),
    array(27, 527),
    array(27, 528),
    array(27, 529),
    array(27, 536),
    array(27, 537),
    array(27, 545),
    array(27, 551),
    array(27, 552),
    array(27, 555),
    array(27, 556),
    array(27, 560),
    array(27, 565),
    array(27, 566),
    array(27, 591),
    array(27, 592),
    array(27, 593),
    array(27, 594),
    array(27, 595),
    array(27, 596),
    array(27, 597),
    array(27, 598),
    array(27, 674),
    array(27, 675),
    array(27, 768),
    array(27, 769),
    array(27, 770),
    array(27, 771),
    array(27, 772),
    array(27, 995),
    array(27, 1005),
    array(27, 2007),
    array(27, 2025),
    array(27, 2031),
    array(27, 2033),
    array(27, 6000),
    array(28, 12),
    array(28, 231),
    array(28, 236),
    array(28, 254),
    array(28, 257),
    array(28, 259),
    array(28, 261),
    array(28, 262),
    array(28, 293),
    array(28, 545),
    array(28, 547),
    array(28, 548),
    array(28, 549),
    array(28, 551),
    array(28, 565),
    array(28, 566),
    array(28, 567),
    array(28, 611),
    array(28, 672),
    array(28, 678),
    array(28, 679),
    array(28, 680),
    array(28, 682),
    array(28, 772),
    array(28, 773),
    array(28, 775),
    array(28, 777),
    array(28, 778),
    array(28, 779),
    array(28, 780),
    array(28, 978),
    array(28, 985),
    array(28, 987),
    array(28, 995),
    array(28, 1017),
    array(28, 1021),
    array(28, 6000),
    array(29, 306),
    array(29, 309),
    array(29, 310),
    array(29, 313),
    array(29, 466),
    array(29, 494),
    array(29, 496),
    array(29, 497),
    array(29, 502),
    array(29, 503),
    array(29, 504),
    array(29, 505),
    array(29, 507),
    array(29, 513),
    array(29, 514),
    array(29, 515),
    array(29, 6000),
    array(30, 313),
    array(30, 316),
    array(30, 320),
    array(30, 520),
    array(30, 521),
    array(30, 522),
    array(30, 526),
    array(30, 530),
    array(30, 531),
    array(30, 783),
    array(30, 6000),
    array(31, 267),
    array(31, 293),
    array(31, 298),
    array(31, 299),
    array(31, 683),
    array(31, 1021),
    array(31, 6000),
    array(32, 279),
    array(32, 293),
    array(32, 300),
    array(32, 301),
    array(32, 784),
    array(32, 785),
    array(32, 6000),
    array(33, 12),
    array(33, 254),
    array(33, 261),
    array(33, 262),
    array(33, 263),
    array(33, 264),
    array(33, 265),
    array(33, 266),
    array(33, 267),
    array(33, 271),
    array(33, 298),
    array(33, 786),
    array(33, 787),
    array(33, 788),
    array(33, 999),
    array(33, 1021),
    array(33, 6000),
    array(34, 12),
    array(34, 254),
    array(34, 271),
    array(34, 273),
    array(34, 275),
    array(34, 277),
    array(34, 300),
    array(34, 301),
    array(34, 636),
    array(34, 789),
    array(34, 790),
    array(34, 791),
    array(34, 792),
    array(34, 793),
    array(34, 794),
    array(34, 795),
    array(34, 3001),
    array(34, 823),
    array(34, 999),
    array(34, 2023),
    array(34, 6000),
    array(35, 12),
    array(35, 254),
    array(35, 278),
    array(35, 279),
    array(35, 280),
    array(35, 281),
    array(35, 283),
    array(35, 293),
    array(35, 684),
    array(35, 6000),
    array(36, 329),
    array(36, 330),
    array(36, 333),
    array(36, 335),
    array(36, 337),
    array(36, 416),
    array(36, 6000),
    array(37, 266),
    array(37, 325),
    array(37, 329),
    array(37, 333),
    array(37, 796),
    array(37, 797),
    array(37, 798),
    array(37, 6000),
    array(38, 325),
    array(38, 327),
    array(38, 328),
    array(38, 799),
    array(38, 800),
    array(38, 801),
    array(38, 802),
    array(38, 803),
    array(38, 804),
    array(38, 805),
    array(38, 824),
    array(38, 6000),
    array(39, 328),
    array(39, 333),
    array(39, 416),
    array(39, 685),
    array(39, 806),
    array(39, 807),
    array(39, 808),
    array(39, 825),
    array(39, 1018),
    array(39, 6000),
    array(40, 12),
    array(40, 254),
    array(40, 321),
    array(40, 341),
    array(40, 344),
    array(40, 345),
    array(40, 355),
    array(40, 358),
    array(40, 365),
    array(40, 366),
    array(40, 369),
    array(40, 371),
    array(40, 570),
    array(40, 572),
    array(40, 573),
    array(40, 574),
    array(40, 612),
    array(40, 613),
    array(40, 686),
    array(40, 687),
    array(40, 688),
    array(40, 689),
    array(40, 690),
    array(40, 809),
    array(40, 2001),
    array(40, 2002),
    array(40, 2003),
    array(40, 2004),
    array(40, 2005),
    array(40, 2006),
    array(40, 2019),
    array(40, 2034),
    array(40, 6000),
    array(40, 2014),
    array(41, 341),
    array(41, 352),
    array(41, 353),
    array(41, 355),
    array(41, 356),
    array(41, 690),
    array(41, 712),
    array(41, 6000),
    array(41, 2014),
    array(42, 352),
    array(42, 356),
    array(42, 357),
    array(42, 712),
    array(42, 810),
    array(42, 811),
    array(42, 812),
    array(42, 813),
    array(42, 814),
    array(42, 6000),
    array(43, 341),
    array(43, 346),
    array(43, 349),
    array(43, 361),
    array(43, 616),
    array(43, 617),
    array(43, 692),
    array(43, 693),
    array(43, 815),
    array(43, 2014),
    array(43, 2015),
    array(43, 6000),
    array(44, 358),
    array(44, 361),
    array(44, 365),
    array(44, 366),
    array(44, 6000),
    array(45, 349),
    array(45, 365),
    array(45, 367),
    array(45, 368),
    array(45, 1022),
    array(45, 6000),
    array(46, 341),
    array(46, 349),
    array(46, 351),
    array(46, 365),
    array(46, 367),
    array(46, 368),
    array(46, 618),
    array(46, 619),
    array(46, 2014),
    array(46, 2015),
    array(46, 6000),
    array(47, 2012),
    array(47, 6000),
    array(1, 378),
    array(1, 380),
    array(1, 381),
    array(1, 383),
    array(1, 385),
    array(1, 388),
    array(1, 392),
    array(1, 394),
    array(1, 395),
    array(1, 400),
    array(1, 401),
    array(1, 402),
    array(1, 404),
    array(1, 408),
    array(1, 599),
    array(1, 600),
    array(1, 601),
    array(1, 602),
    array(1, 614),
    array(1, 615),
    array(1, 2009),
    array(1, 2010),
    array(1, 2011),
    array(1, 6000),
    array(1, 2046),
    array(2, 15),
    array(2, 158),
    array(2, 159),
    array(2, 171),
    array(2, 175),
    array(2, 176),
    array(2, 380),
    array(2, 695),
    array(2, 697),
    array(2, 698),
    array(2, 1023),
    array(2, 1024),
    array(2, 6000),
    array(2, 2046),
    array(3, 15),
    array(3, 23),
    array(3, 121),
    array(3, 149),
    array(3, 150),
    array(3, 151),
    array(3, 152),
    array(3, 155),
    array(3, 156),
    array(3, 157),
    array(3, 158),
    array(3, 645),
    array(3, 646),
    array(3, 1023),
    array(3, 6000),
    array(4, 15),
    array(4, 121),
    array(4, 129),
    array(4, 145),
    array(4, 146),
    array(4, 147),
    array(4, 148),
    array(4, 149),
    array(4, 181),
    array(4, 603),
    array(4, 2045),
    array(4, 650),
    array(4, 2026),
    array(4, 6000),
    array(5, 23),
    array(5, 150),
    array(5, 152),
    array(5, 157),
    array(5, 171),
    array(5, 174),
    array(5, 175),
    array(5, 179),
    array(5, 647),
    array(5, 648),
    array(5, 6000),
    array(6, 19),
    array(6, 145),
    array(6, 171),
    array(6, 172),
    array(6, 173),
    array(6, 179),
    array(6, 181),
    array(6, 183),
    array(6, 649),
    array(6, 6000),
    array(7, 15),
    array(7, 19),
    array(7, 121),
    array(7, 129),
    array(7, 135),
    array(7, 160),
    array(7, 162),
    array(7, 163),
    array(7, 171),
    array(7, 623),
    array(7, 622),
    array(7, 624),
    array(7, 650),
    array(7, 704),
    array(7, 6000),
    array(8, 121),
    array(8, 129),
    array(8, 135),
    array(8, 142),
    array(8, 204),
    array(8, 652),
    array(8, 654),
    array(8, 706),
    array(8, 708),
    array(8, 709),
    array(8, 2021),
    array(8, 2035),
    array(8, 6000),
    array(9, 15),
    array(9, 121),
    array(9, 141),
    array(9, 142),
    array(9, 143),
    array(9, 144),
    array(9, 623),
    array(9, 624),
    array(9, 654),
    array(9, 655),
    array(9, 830),
    array(9, 835),
    array(9, 836),
    array(9, 837),
    array(9, 839),
    array(9, 2035),
    array(9, 6000),
    array(10, 17),
    array(10, 21),
    array(10, 117),
    array(10, 137),
    array(10, 138),
    array(10, 140),
    array(10, 141),
    array(10, 184),
    array(10, 655),
    array(10, 710),
    array(10, 711),
    array(10, 830),
    array(10, 835),
    array(10, 839),
    array(10, 840),
    array(10, 841),
    array(10, 2036),
    array(10, 6000),
    array(11, 15),
    array(11, 17),
    array(11, 21),
    array(11, 93),
    array(11, 95),
    array(11, 97),
    array(11, 103),
    array(11, 117),
    array(11, 121),
    array(11, 137),
    array(11, 429),
    array(11, 433),
    array(11, 436),
    array(11, 437),
    array(11, 445),
    array(11, 583),
    array(11, 589),
    array(11, 625),
    array(11, 656),
    array(11, 830),
    array(11, 835),
    array(11, 845),
    array(11, 848),
    array(11, 851),
    array(11, 1014),
    array(11, 2021),
    array(11, 2032),
    array(11, 2035),
    array(11, 2036),
    array(11, 6000),
    array(12, 103),
    array(12, 129),
    array(12, 194),
    array(12, 196),
    array(12, 197),
    array(12, 198),
    array(12, 199),
    array(12, 202),
    array(12, 204),
    array(12, 205),
    array(12, 206),
    array(12, 580),
    array(12, 588),
    array(12, 657),
    array(12, 658),
    array(12, 713),
    array(12, 714),
    array(12, 715),
    array(12, 716),
    array(12, 717),
    array(12, 718),
    array(12, 719),
    array(12, 845),
    array(12, 855),
    array(12, 861),
    array(12, 988),
    array(12, 1016),
    array(12, 1019),
    array(12, 2021),
    array(12, 2038),
    array(12, 6000),
    array(13, 11),
    array(13, 15),
    array(13, 17),
    array(13, 21),
    array(13, 89),
    array(13, 91),
    array(13, 93),
    array(13, 94),
    array(13, 95),
    array(13, 99),
    array(13, 103),
    array(13, 105),
    array(13, 110),
    array(13, 114),
    array(13, 115),
    array(13, 116),
    array(13, 117),
    array(13, 121),
    array(13, 129),
    array(13, 137),
    array(13, 194),
    array(13, 196),
    array(13, 199),
    array(13, 429),
    array(13, 434),
    array(13, 435),
    array(13, 437),
    array(13, 440),
    array(13, 442),
    array(13, 443),
    array(13, 444),
    array(13, 445),
    array(13, 446),
    array(13, 576),
    array(13, 577),
    array(13, 579),
    array(13, 580),
    array(13, 582),
    array(13, 583),
    array(13, 584),
    array(13, 585),
    array(13, 586),
    array(13, 587),
    array(13, 588),
    array(13, 589),
    array(13, 590),
    array(13, 715),
    array(13, 720),
    array(13, 830),
    array(13, 843),
    array(13, 844),
    array(13, 848),
    array(13, 855),
    array(13, 858),
    array(13, 860),
    array(13, 863),
    array(13, 864),
    array(13, 865),
    array(13, 869),
    array(13, 870),
    array(13, 871),
    array(13, 873),
    array(13, 879),
    array(13, 882),
    array(13, 885),
    array(13, 889),
    array(13, 890),
    array(13, 891),
    array(13, 893),
    array(13, 894),
    array(13, 900),
    array(13, 1000),
    array(13, 1001),
    array(13, 1002),
    array(13, 1013),
    array(13, 1014),
    array(13, 2021),
    array(13, 2029),
    array(13, 2032),
    array(13, 2035),
    array(13, 2036),
    array(13, 2038),
    array(13, 6000),
    array(14, 11),
    array(14, 89),
    array(14, 93),
    array(14, 94),
    array(14, 99),
    array(14, 100),
    array(14, 105),
    array(14, 107),
    array(14, 114),
    array(14, 212),
    array(14, 604),
    array(14, 629),
    array(14, 659),
    array(14, 721),
    array(14, 722),
    array(14, 723),
    array(14, 865),
    array(14, 873),
    array(14, 877),
    array(14, 879),
    array(14, 882),
    array(14, 885),
    array(14, 889),
    array(14, 890),
    array(14, 892),
    array(14, 894),
    array(14, 895),
    array(14, 896),
    array(14, 901),
    array(14, 902),
    array(14, 903),
    array(14, 2013),
    array(14, 2022),
    array(14, 2030),
    array(14, 2035),
    array(14, 2036),
    array(14, 6000),
    array(15, 17),
    array(15, 120),
    array(15, 138),
    array(15, 162),
    array(15, 163),
    array(15, 172),
    array(15, 179),
    array(15, 180),
    array(15, 184),
    array(15, 189),
    array(15, 191),
    array(15, 193),
    array(15, 241),
    array(15, 1020),
    array(15, 6000),
    array(16, 220),
    array(16, 241),
    array(16, 247),
    array(16, 249),
    array(16, 728),
    array(16, 730),
    array(16, 731),
    array(16, 732),
    array(16, 733),
    array(16, 734),
    array(16, 735),
    array(16, 2024),
    array(16, 2037),
    array(16, 6000),
    array(17, 241),
    array(17, 245),
    array(17, 660),
    array(17, 737),
    array(17, 738),
    array(17, 6000),
    array(17, 2041),
    array(17, 2042),
    array(16, 2042),
    array(15, 2042),
    array(20, 2039),
    array(15, 2039),
    array(15, 2043),
    array(15, 2040),
    array(18, 241),
    array(18, 243),
    array(18, 244),
    array(18, 739),
    array(18, 741),
    array(18, 742),
    array(18, 743),
    array(18, 6000),
    array(19, 114),
    array(19, 118),
    array(19, 213),
    array(19, 744),
    array(19, 6000),
    array(20, 21),
    array(20, 114),
    array(20, 118),
    array(20, 119),
    array(20, 120),
    array(20, 184),
    array(20, 189),
    array(20, 216),
    array(20, 746),
    array(20, 748),
    array(20, 749),
    array(20, 185),
    array(20, 6000),
    array(21, 11),
    array(21, 89),
    array(21, 114),
    array(21, 220),
    array(21, 224),
    array(21, 2027),
    array(21, 663),
    array(21, 664),
    array(21, 665),
    array(21, 933),
    array(21, 935),
    array(21, 956),
    array(21, 957),
    array(21, 963),
    array(21, 964),
    array(21, 6000),
    array(22, 11),
    array(22, 89),
    array(22, 108),
    array(22, 212),
    array(22, 213),
    array(22, 216),
    array(22, 666),
    array(22, 724),
    array(22, 750),
    array(22, 751),
    array(22, 752),
    array(22, 753),
    array(22, 754),
    array(22, 755),
    array(22, 6000),
    array(23, 11),
    array(23, 89),
    array(23, 114),
    array(23, 216),
    array(23, 217),
    array(23, 306),
    array(23, 477),
    array(23, 605),
    array(23, 606),
    array(23, 608),
    array(23, 609),
    array(23, 667),
    array(23, 669),
    array(23, 756),
    array(23, 758),
    array(23, 915),
    array(23, 917),
    array(23, 918),
    array(23, 933),
    array(23, 935),
    array(23, 944),
    array(23, 945),
    array(23, 947),
    array(23, 948),
    array(23, 949),
    array(23, 950),
    array(23, 951),
    array(23, 952),
    array(23, 954),
    array(23, 956),
    array(23, 960),
    array(23, 990),
    array(23, 1015),
    array(23, 1025),
    array(23, 2002),
    array(23, 2008),
    array(23, 2016),
    array(23, 2017),
    array(23, 2018),
    array(23, 2020),
    array(23, 6000),
    array(23, 6001),
    array(24, 227),
    array(24, 228),
    array(24, 306),
    array(24, 307),
    array(24, 320),
    array(24, 466),
    array(24, 2028),
    array(24, 477),
    array(24, 478),
    array(24, 479),
    array(24, 480),
    array(24, 481),
    array(24, 2027),
    array(24, 484),
    array(24, 485),
    array(24, 486),
    array(24, 487),
    array(24, 670),
    array(24, 759),
    array(24, 6000),
    array(25, 11),
    array(25, 89),
    array(25, 231);
				";
*/
?>