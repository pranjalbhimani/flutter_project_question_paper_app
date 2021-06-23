import 'dart:core';
import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:question/sidepage.dart';
import 'package:url_launcher/url_launcher.dart';

class Aboutusgu extends StatefulWidget {
  @override
  _AboutusguState createState() => _AboutusguState();
}

class _AboutusguState extends State<Aboutusgu> {
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
            "About us",
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            Container(
              margin: EdgeInsets.only(top: 10),
              alignment: Alignment.center,
              child: Text(
                "Gujarat University",
                style: TextStyle(
                  decoration: TextDecoration.underline,
                  color: Colors.blue,
                  fontSize: 25,
                  fontWeight: FontWeight.bold,
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 10, left: 50),
              child: Text(
                "Navrangpura, Ahmedabad – 380 009, Gujarat, India.",
                style: TextStyle(fontSize: 18),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 50),
              child: Text(
                "Phone : +91-079-26301341, +91-079-26300342/43 Fax : +91-079-26306202",
                style: TextStyle(fontSize: 18),
              ),
            ),
            Padding(
              padding: const EdgeInsets.only(top: 20),
              child: Center(
                child: GestureDetector(
                  onTap: () async {
                    launch("https://www.gujaratuniversity.ac.in/");
                  },
                  child: Text(
                    "www.gujaratuniversity.ac.in",
                    style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
                  ),
                ),
              ),
            ),
            Divider(
              thickness: 3,
              color: Colors.blue,
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Text(
                  "University Established  - 	23rd November, 1949",
                  style: TextStyle(fontSize: 18),
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Text(
                  "University Head Quarter - Ahmedabad",
                  style: TextStyle(fontSize: 18),
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Text(
                  "Land-estate of the University - Acres 260",
                  style: TextStyle(fontSize: 18),
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Row(
                  children: [
                    Text(
                      "Chancellor    -",
                      style: TextStyle(fontSize: 18),
                    ),
                    Container(
                      margin: EdgeInsets.only(left: 10),
                      width: MediaQuery.of(context).size.width / 2,
                      child: Text(
                        "Hon. The Governor of Gujarat, Shri Acharya Dev Vrat",
                        style: TextStyle(fontSize: 18),
                      ),
                    ),
                  ],
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Row(
                  children: [
                    Text(
                      "Vice-Chancellor    -",
                      style: TextStyle(fontSize: 18),
                    ),
                    Container(
                      margin: EdgeInsets.only(left: 10),
                      width: MediaQuery.of(context).size.width / 2,
                      child: Text(
                        "Prof. (Dr.) H. A. Pandya",
                        style: TextStyle(fontSize: 18),
                      ),
                    ),
                  ],
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Row(
                  children: [
                    Text(
                      "Pro-Vice-Chancellor -",
                      style: TextStyle(fontSize: 18),
                    ),
                    Container(
                      margin: EdgeInsets.only(left: 10),
                      width: MediaQuery.of(context).size.width / 2,
                      child: Text(
                        "Dr. Jagdish Bhavsar",
                        style: TextStyle(fontSize: 18),
                      ),
                    ),
                  ],
                ),
              ),
            ),
            Padding(
              padding: EdgeInsets.only(top: 20, left: 5),
              child: Container(
                alignment: Alignment.centerLeft,
                child: Row(
                  children: [
                    Text(
                      "Registrar    -",
                      style: TextStyle(fontSize: 18),
                    ),
                    Container(
                      margin: EdgeInsets.only(left: 10),
                      width: MediaQuery.of(context).size.width / 2,
                      child: Text(
                        "Dr. P.M Patel",
                        style: TextStyle(fontSize: 18),
                      ),
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
