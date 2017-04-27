# Makefile for jQuery of Semester Project
#
# Tom Owen

DESTDIR = /home/owent0/public_html/web/Semester-Project/assets
TARGETS = jquery.min.js
all: $(TARGETS)

install: $(TARGETS)
	@if [ ! -d $(DESTDIR) ] ; then mkdir -m 755 -p $(DESTDIR); fi
	@for f in $(TARGETS)               ; \
	do                                     \
		/usr/bin/install -v -t $(DESTDIR) -m 444 $$f ; \
	done

deinstall:
	cd $(DESTDIR) ; /bin/rm -f $(TARGETS)
	@echo "   ==>   removed file(s): $(TARGETS)
	@echo "   ==>   left directory : $(DESTDIR)"

redo: deinstall install
