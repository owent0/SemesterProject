# Makefile for Semester-Project bootstrp css folder
#
# Tom Owen 2017

DESTDIR = /home/owent0/public_html/web/Semester-Project/assets/bootstrap/css
TARGETS = bootstrap.min.css

all: $(TARGETS)

install: $(TARGETS)
	@if [ ! -d $(DESTDIR) ] ; then mkdir -p $(DESTDIR); fi
	@for f in $(TARGETS)               ; \
	do                                     \
		/usr/bin/install -v -t $(DESTDIR) -m 444 $$f ; \
	done

deinstall:
	cd $(DESTDIR) ; /bin/rm -f $(TARGETS)
	@echo "   ==>   removed file(s): $(TARGETS)
	@echo "   ==>   left directory : $(DESTDIR)"

redo: deinstall install
