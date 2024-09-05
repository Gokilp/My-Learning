#include<iostream>
#include<string> 
using namespace std;
int main()
{ 
     concat 
   string Fristname = "Ram";
   string lastname = "Kumar";

   string full_name = Fristname+lastname;
   cout<< full_name;

  --------------------------------------------------------  
     // Appending 

     string name = "Gokil";
     string last_name = "Ponnusamy";

     name.append(last_name);

     cout<<name;

  appending on single variable file 

-----------------------------------------------------------------------

// access Character


#include <iostream>
#include <string>
using namespace std;

int main() {
  string myString = "Hello";
  cout << myString[1];
  return 0;
}
}

-------------------------------------------------------------------------------------
// Access Substring 

#include <string>
using namespace std;

int main()
{
    // Take any string
    string s1 = "Geeks";

    // Copy two characters of s1 (starting
    // from index 3)
    string r = s1.substr(3, 2);

    // prints the result
    cout << "String is: " << r;

    return 0;
}

-----------------------------------------------------------------------------------------------
// compare String  
#include<iostream>
#include<string>
using namespace std;

int main() {
    string name = "mom";
    string name1 = "mom";

    int Value = name.compare(name1);  // Store the result in an int

    // You can check the value and print a message
    if (Value == 0) {
        cout << "The strings are equal." << endl;
    } else if (Value > 0) {
        cout << "The first string is greater." << endl;
    } else {
        cout << "The second string is greater." << endl;
    }

    return 0;
}

-------------------------------------------------------------------------------------------
// Replace the String 
#include <iostream>
#include <string>

int main() {
    std::string str = "Hello World";
    str.replace(6, 5, "Universe");
    std::cout << "Replaced: " << str << std::endl; // Output: Replaced: Hello Universe
    return 0;
}

------------------------------------------------------------------------------------------------------
// Lower

#include <iostream>
#include <cctype>
using namespace std;

int main() {

  // convert 'A' to lowercase
  char ch = tolower('a');

  cout << ch;

  return 0;
}
-----------------------------------------------------------------------------------------
// Upper case

#include <iostream>
#include <cctype>
using namespace std;

int main() {

  // convert 'A' to lowercase
  char ch = toupper('a');

  cout << ch;

  return 0;
}
