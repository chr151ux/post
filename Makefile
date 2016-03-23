CC=gcc
CFLAGS  = -Wall ${INCDIRS}
LDFLAGS = 
INCLUDES = 
LIBS =
TARGET = post

OBJ = post.o 

test: $(OBJ)
	$(CC) $(CFLAGS) $(INCLUDES) -o ${TARGET} $(OBJ) $(LIBS)

%.o: %.c
	$(CC) $(CFLAGS) $(INCLUDES) -c $<

clean:
	rm -rf *o ${TARGET}
