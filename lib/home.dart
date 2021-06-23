import 'dart:core';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:question/egmain.dart';
import 'package:question/sidepage.dart';

class Home extends StatefulWidget {
  @override
  _HomeState createState() => _HomeState();
}

class _HomeState extends State<Home> {
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
            "Courses",
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ),
      ),
      body: lst(),
    );
  }
}
