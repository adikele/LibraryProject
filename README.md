LibraryProject
==============

The "Library" website that is displayed here allows a user to list out all the available library books in a particular category. The customer (site user) is asked to choose a category of books for which he/she wishes to see the available books.  Available categories (in a drop down list) are: fiction and adventure. 
 
How the code works: There are four classes apart from a testLibrary file: Reader, Author, Person, Book   Every Book Object has two type of data:  (i)    five fields, namely, title, genre, pages, readerID and authorID, that are entered directly with a new book entry (ii)   arrays authorDetails and readerDetails.  The testLibrary files uses Book Class's methods getReaderID () and getAuthorID () to fill in the authorDetails and readerDetails fields of every Book object that is created. The authorDetails and readerDetails attributes of Book are filled from data stored in objects of type Reader and Author.  The parent class for the Reader and Author classes is the Person class.

Future course of action for the project: THis basic application can be expanded to show the picture of the book and other details such as statistics about the book in question, for eg, its popularity among different types of readers.
