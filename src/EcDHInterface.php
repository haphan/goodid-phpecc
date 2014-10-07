<?php

namespace Mdanter\Ecc;

/**
 * *********************************************************************
 * Copyright (C) 2012 Matyas Danter
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
 * OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * ***********************************************************************
 */

/**
 * This is the contract for implementing EcDH (EC Diffie Hellman).
 *
 * @author Matej Danter
 */
interface EcDHInterface
{

    /**
     * @return void
     */
    public function calculateKey();

    /**
     * @return string
     */
    public function getSharedKey();

    /**
     * @param bool $regenerate
     * @return PointInterface
     */
    public function getPublicPoint($regenerate = false);

    /**
     * @return void
     */
    public function setPublicPoint(PointInterface $q);

    /**
     *
     * @param string $string
     * @return string
     */
    public function encrypt($string);

    /**
     * @param string $string
     * @return string
     */
    public function decrypt($string);

    /**
     * @param string $path
     * @return string|null
     */
    public function encryptFile($path);

    /**
     * @param string $path
     * @return string|null
     */
    public function decryptFile($path);
}
