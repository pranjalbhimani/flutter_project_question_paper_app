import 'dart:core';
import 'dart:ui';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_staggered_animations/flutter_staggered_animations.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:question/sidepage.dart';
import 'package:url_launcher/url_launcher.dart';

class Credits extends StatefulWidget {
  @override
  _CreditsState createState() => _CreditsState();
}

class _CreditsState extends State<Credits> {
  List stu = [
    {
      'name': "Pranjal Bhimani",
      'img': "assets/pranjal.jpg",
      'position': "Backend Developer + Api",
      'github': 'https://github.com/pranjalbhimani/',
      'link': 'https://www.linkedin.com/in/pranjalbhimani/',
      'mail': 'pranjalbhimani77@gmail.com',
    },
    {
      'name': "Rishabh Shah",
      'img': "assets/rishabh.jpg",
      'position': "App Developer",
      'github': 'https://github.com/Rishabh11200/',
      'link': 'https://www.linkedin.com/in/rishabh1100/',
      'mail': 'rushabhshah.imscit17@gmail.com'
    },
    {
      'name': "Jinali Sanghavi",
      'img': "assets/jinali.jpg",
      'position': "App Designer",
      'github': 'https://github.com/jinali99/',
      'link': 'https://www.linkedin.com/in/jinalisanghavi99/',
      'mail': 'jinalisanghvi99@gmail.com,'
    },
  ];
  List mentor = [
    {
      'name': "Prof. Vishal Narvani",
      'img': "assets/vishalsir.png",
    },
    {
      'name': "Prof. Dinesh Kalal",
      'img': "assets/dineshsir.jpg",
    },
  ];
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
            "Credits",
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            Container(
              margin: EdgeInsets.only(top: 10),
              child: Text(
                "Core Team",
                style: TextStyle(
                  color: Colors.blueAccent,
                  fontSize: 25,
                  fontWeight: FontWeight.bold,
                  fontStyle: FontStyle.normal,
                ),
              ),
            ),
            Container(
              margin: EdgeInsets.only(top: 5),
              child: AnimationLimiter(
                child: ListView.builder(
                  physics: NeverScrollableScrollPhysics(),
                  scrollDirection: Axis.vertical,
                  shrinkWrap: true,
                  itemCount: stu.length.toInt(),
                  itemBuilder: (BuildContext context, int index) {
                    return AnimationConfiguration.staggeredList(
                      position: index,
                      duration: const Duration(milliseconds: 500),
                      child: SlideAnimation(
                        verticalOffset: 50.0,
                        child: FadeInAnimation(
                          child: Card(
                            margin: EdgeInsets.all(12),
                            elevation: 10,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20.0),
                            ),
                            // color: Color.fromRGBO(64, 75, 96, .9),
                            color: Colors.white,
                            child: Padding(
                              padding: const EdgeInsets.symmetric(
                                  vertical: 8.0, horizontal: 16),
                              child: Column(
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: <Widget>[
                                  Container(
                                    alignment: Alignment.center,
                                    child: SizedBox(
                                      width: 100,
                                      height: 100,
                                      child: CircleAvatar(
                                        backgroundColor: Color(0xffE6E6E6),
                                        backgroundImage:
                                            ExactAssetImage(stu[index]["img"]),
                                      ),
                                    ),
                                  ),
                                  Container(
                                    alignment: Alignment.center,
                                    child: Column(
                                      children: [
                                        SizedBox(
                                          height: 20,
                                        ),
                                        Text(
                                          stu[index]["name"],
                                          style: TextStyle(
                                              fontFamily: 'ita', fontSize: 20),
                                        ),
                                        SizedBox(
                                          height: 5,
                                        ),
                                        Text(
                                          stu[index]["position"],
                                          style: TextStyle(
                                              color: Colors.blue, fontSize: 20),
                                        ),
                                        Center(
                                          child: Row(
                                            crossAxisAlignment:
                                                CrossAxisAlignment.center,
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              IconButton(
                                                icon: FaIcon(FontAwesomeIcons
                                                    .githubSquare),
                                                onPressed: () async {
                                                  String url =
                                                      stu[index]["github"];
                                                  // if (await canLaunch(url)) {
                                                  launch(url);
                                                  // } else {
                                                  //   throw 'Could not launch $url';
                                                  // }
                                                },
                                              ),
                                              IconButton(
                                                icon: FaIcon(FontAwesomeIcons
                                                    .linkedinIn),
                                                color: Color(0xFF0073b1),
                                                onPressed: () async {
                                                  String url =
                                                      stu[index]['link'];
                                                  launch(url);
                                                },
                                              ),
                                              IconButton(
                                                icon: Icon(Icons
                                                    .mark_email_read_rounded),
                                                onPressed: () async {
                                                  Uri _emailLaunchUri = Uri(
                                                    scheme: 'mailto',
                                                    path: stu[index]['mail'],
                                                  );
                                                  launch(_emailLaunchUri
                                                      .toString());
                                                },
                                              ),
                                            ],
                                          ),
                                        )
                                      ],
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ),
                        ),
                      ),
                    );
                  },
                ),
              ),
            ),
            Divider(
              height: 10,
            ),
            Text(
              "Mentors",
              style: TextStyle(
                color: Colors.blueAccent,
                fontSize: 20,
                fontWeight: FontWeight.bold,
                fontStyle: FontStyle.normal,
              ),
            ),
            Container(
              margin: EdgeInsets.only(top: 5),
              child: AnimationLimiter(
                child: ListView.builder(
                  physics: NeverScrollableScrollPhysics(),
                  scrollDirection: Axis.vertical,
                  shrinkWrap: true,
                  itemCount: mentor.length.toInt(),
                  itemBuilder: (BuildContext context, int index) {
                    return AnimationConfiguration.staggeredList(
                      position: index,
                      duration: const Duration(milliseconds: 500),
                      child: SlideAnimation(
                        verticalOffset: 50.0,
                        child: FadeInAnimation(
                          child: Card(
                            margin: EdgeInsets.all(12),
                            elevation: 10,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20.0),
                            ),
                            // color: Color.fromRGBO(64, 75, 96, .9),
                            color: Colors.white,
                            child: Padding(
                              padding: const EdgeInsets.symmetric(
                                  vertical: 8.0, horizontal: 16),
                              child: Column(
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: <Widget>[
                                  Container(
                                    alignment: Alignment.center,
                                    child: SizedBox(
                                      width: 100,
                                      height: 100,
                                      child: CircleAvatar(
                                        backgroundColor: Color(0xffE6E6E6),
                                        backgroundImage: ExactAssetImage(
                                            mentor[index]["img"]),
                                      ),
                                    ),
                                  ),
                                  Container(
                                    alignment: Alignment.center,
                                    child: Column(
                                      children: [
                                        SizedBox(
                                          height: 20,
                                        ),
                                        Text(
                                          mentor[index]["name"],
                                          style: TextStyle(
                                              fontFamily: 'ita', fontSize: 20),
                                        ),
                                      ],
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ),
                        ),
                      ),
                    );
                  },
                ),
              ),
            ),
            Divider(
              height: 10,
            ),
            Text(
              "Head of Directory",
              style: TextStyle(
                color: Colors.blueAccent,
                fontSize: 20,
                fontWeight: FontWeight.bold,
                fontStyle: FontStyle.normal,
              ),
            ),
            Container(
              margin: EdgeInsets.only(top: 5),
              child: AnimationLimiter(
                child: ListView.builder(
                  physics: NeverScrollableScrollPhysics(),
                  scrollDirection: Axis.vertical,
                  shrinkWrap: true,
                  itemCount: 1,
                  itemBuilder: (BuildContext context, int index) {
                    return AnimationConfiguration.staggeredList(
                      position: index,
                      duration: const Duration(milliseconds: 500),
                      child: SlideAnimation(
                        verticalOffset: 50.0,
                        child: FadeInAnimation(
                          child: Card(
                            margin: EdgeInsets.all(12),
                            elevation: 10,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20.0),
                            ),
                            // color: Color.fromRGBO(64, 75, 96, .9),
                            color: Colors.white,
                            child: Padding(
                              padding: const EdgeInsets.symmetric(
                                  vertical: 8.0, horizontal: 16),
                              child: Column(
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: <Widget>[
                                  Container(
                                    alignment: Alignment.center,
                                    child: SizedBox(
                                      width: 100,
                                      height: 100,
                                      child: CircleAvatar(
                                        backgroundColor: Color(0xffE6E6E6),
                                        backgroundImage:
                                            ExactAssetImage("assets/hod.jpg"),
                                      ),
                                    ),
                                  ),
                                  Container(
                                    alignment: Alignment.center,
                                    child: Column(
                                      children: [
                                        SizedBox(
                                          height: 20,
                                        ),
                                        Text(
                                          "Dr. Harshal Arolkar",
                                          style: TextStyle(
                                              fontFamily: 'ita', fontSize: 20),
                                        ),
                                      ],
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ),
                        ),
                      ),
                    );
                  },
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
