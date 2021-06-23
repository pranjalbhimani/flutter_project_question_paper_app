import 'dart:core';

import 'package:carousel_slider/carousel_slider.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:question/sidepage.dart';
import 'package:toast/toast.dart';

class First extends StatefulWidget {
  @override
  _FirstState createState() => _FirstState();
}

List<String> imgList = [
  'assets/gu/gu1.jpg',
  'assets/gu/gu2.jpg',
  'assets/gu/gu3.jpg',
  'assets/gu/gu5.jpg',
  'assets/gu/gu6.jpg',
];
String his =
    "The Gujarat University was conceived in the nineteen twenties in the minds of public-spirited and learned men like Gandhiji, Sardar Patel, Acharya Anandshankar B. Dhruva, Dada Saheb Mavlankar, Kasturbhai Lalbhai and many others. However, the University could come into existence only after the achievement of independence.In 1949, the University was incorporated under the Gujarat University Act of the State Government ‘as a teaching and affiliating University.’ This was done as a measure of decentralisation and reorganization of University education in the then Province of Bombay.";
String his2 =
    "During the course of its life of more than five decades, the University has seen the establishment of seven more Universities which were carved out of the jurisdiction of the Gujarat University, viz., Sardar Patel University, Saurashtra University, Bhavnagar University, South Gujarat University, Gujarat Ayurveda University, Gujarat Agricultural University and North Gujarat University. Even then, the Gujarat University is the largest university in the state catering to the needs of higher education of more than four lakh students scattered over 286 colleges, 22 recognised institutions and 24 approved institutions. There are 36 Post-Graduate University departments and 221 P.G. Centres. New 140250 students are enrolled at under graduate level and Post Graduate level in academic year 2016-17.";

class _FirstState extends State<First> {
  void show() {
    Toast.show("Already at home!", context);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: Sidepage(),
      appBar: AppBar(
        brightness: Brightness.dark,
        elevation: 5,
        title: Container(
          // padding: const EdgeInsets.only(left: 60),
          child: Text(
            "Home",
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ),
      ),
      body: SingleChildScrollView(
        child: Center(
          child: Column(
            children: [
              CarouselSlider(
                options: CarouselOptions(
                  autoPlay: true,
                  enlargeCenterPage: true,
                  autoPlayAnimationDuration: Duration(seconds: 1),
                ),
                items: imgList
                    .map((item) => Container(
                          child: Center(
                              child: Image.asset(
                            item,
                            fit: BoxFit.cover,
                            width: 1000,
                            height: 200,
                          )),
                        ))
                    .toList(),
              ),
              Padding(
                padding: const EdgeInsets.only(top: 10),
                child: Text(
                  "Gujarat University",
                  style: TextStyle(
                      fontSize: 20,
                      fontWeight: FontWeight.bold,
                      color: Colors.blue),
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(8.0),
                child: Text(
                  his,
                  style: TextStyle(fontSize: 17),
                  textAlign: TextAlign.justify,
                ),
              ),
              Padding(
                padding: const EdgeInsets.all(8.0),
                child: Text(
                  his2,
                  style: TextStyle(fontSize: 17),
                  textAlign: TextAlign.justify,
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
