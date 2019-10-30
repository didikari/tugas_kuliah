#include <stdlib.h>
#include <GL/glut.h>


void titik (void) {
	//glClear(GL_COLOR_BUFFER_BIT);
	glBegin(GL_LINES);
	glVertex2d(10,0);
    glVertex2d(50,50);
	glVertex2d(0,0);
	glEnd();
	glFlush();
}


main(int argc, char **argv) {
	glutInit(&argc, argv);
	// menentukan display mode awal (RGBA mode, single buffer, depth buffer)
	glutInitDisplayMode (GLUT_DEPTH | GLUT_SINGLE | GLUT_RGBA);
	// fungsi meletakkan posisi linux
	glutInitWindowPosition(100,100);
	// fungsi membuat linux dengan ukuran sebesar 640 pixel x 480 pixel
	glutInitWindowSize(640,480);
    // fungsi membuat window dengan nama Pemrograman Glut
	glutCreateWindow("Pemrograman GLUT");
	 // melakukan rendering fungsi titik yang telah dibuat
	glutDisplayFunc(titik);
	// deklarasi ukuran sumbu x sebesar 320 satuan ke kiri, 320 satuan ke kanan, 240 satuan ke bawah dan 240 satuan ke atas
	gluOrtho2D(-320.,320.,-240.,240.);
	glutMainLoop();
}
