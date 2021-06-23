import 'package:flutter/material.dart';
import 'package:question/aboutus.dart';
import 'package:question/first.dart';

import 'credits.dart';
import 'home.dart';

class Sidepage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: Column(
        children: <Widget>[
          DrawerHeader(
            child: Center(
              child: Column(
                children: [
                  Expanded(
                    child: Image(
                      image: AssetImage("assets/gu/GujaratUniversity.png"),
                    ),
                  ),
                ],
              ),
            ),
            decoration: BoxDecoration(
              color: Color(0xff365761),
            ),
          ),
          ListTile(
            leading: Icon(Icons.home_outlined),
            title: Text(
              'Home',
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            onTap: () => {
              Navigator.pop(
                context,
                MaterialPageRoute(
                  builder: (context) => First(),
                ),
              ),
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => First(),
                ),
              ),
            },
          ),
          ListTile(
            leading: Icon(Icons.book_outlined),
            title: Text(
              'Papers',
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            onTap: () => {
              Navigator.pop(
                context,
                MaterialPageRoute(
                  builder: (context) => First(),
                ),
              ),
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => Home(),
                ),
              ),
            },
          ),
          ListTile(
            leading: Icon(Icons.copyright_outlined),
            title: Text(
              'Credits',
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            onTap: () => {
              Navigator.pop(
                context,
                MaterialPageRoute(
                  builder: (context) => First(),
                ),
              ),
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => Credits(),
                ),
              ),
            },
          ),
          ListTile(
            leading: Icon(Icons.info_outline),
            title: Text(
              'About us',
              style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
            ),
            onTap: () => {
              Navigator.pop(
                context,
                MaterialPageRoute(
                  builder: (context) => First(),
                ),
              ),
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => Aboutus(),
                ),
              ),
            },
          ),
        ],
      ),
    );
  }
}
